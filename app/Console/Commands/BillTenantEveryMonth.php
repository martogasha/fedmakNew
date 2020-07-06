<?php

namespace App\Console\Commands;

use App\Bill;
use App\MonthlyReport;
use App\PropertyUnitServiceBill;
use App\Report;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class BillTenantEveryMonth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'BillTenant:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Bill Tenant Monthly';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::where('role',2)->get();
        foreach ($users as $user) {
            $getServiceBillAmount = PropertyUnitServiceBill::where('propertyUnit_id', $user->house_id)->where('interval', 'monthly')->sum('amount');

            $billing = Bill::create([
                'tenant_id' => $user->id,
                'property' => $user->property->name,
                'house' => $user->house->name,
                'houseType' => $user->houseType,
                'amount' => $getServiceBillAmount,

            ]);
            $checkBill = MonthlyReport::where('tenant_id', $user->id)->first();
            if ($checkBill) {

                $getBalance = $checkBill->balance;
                $totalBalance = $getBalance + $getServiceBillAmount;
                $updateAmount = MonthlyReport::where('tenant_id', $user->id)->update(['balance' => ($totalBalance)]);

                $updatePaidTenant = MonthlyReport::where('balance', '<=', 0)->where('tenant_id',$user->id)->update(['status' => 0]);
                $updatePaidTenant1 = MonthlyReport::where('balance', '>', 0)->where('tenant_id',$user->id)->update(['status' => 1]);
                $updateAmount = MonthlyReport::where('tenant_id', $user->id)->update(['amount' => ($getServiceBillAmount)]);

            }
            else {
                $monthlyReport = MonthlyReport::create([
                    'tenant_id' => $user->id,
                    'property' => $user->property->name,
                    'house' => $user->house->name,
                    'houseType' => $user->houseType,
                    'amount' => $getServiceBillAmount,
                    'balance' => $getServiceBillAmount,
                    'status' => 1
                ]);
            }

            $report = Report::create([
                'name'=>$user->name,
                'property' => $user->property->name,
                'house' => $user->house->name,
                'houseType' => $user->houseType,
                'amount' => $getServiceBillAmount,
                'status' => 'bill'
            ]);

        }
    }
}
