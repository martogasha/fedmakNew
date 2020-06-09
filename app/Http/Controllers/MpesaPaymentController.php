<?php

namespace App\Http\Controllers;

use App\Mpesapayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Safaricom\Mpesa\Mpesa;

class MpesaPaymentController extends Controller
{
    public function getPayments(){
        $payments = Mpesapayment::all();
        return view('admin.mpesaPayments',[
            'payments'=>$payments
        ]);
    }
    public function getPayment(Request $request)
    {

        $payment = Mpesapayment::create([
            'TransactionType' => $request->TransactionType,
            'TransactionId' => $request->TransactionId,
            'TransTime' => $request->TransTime,
            'TransAmount' => $request->TransAmount,
            'BusinessShortCode' => $request->BusinessShortCode,
            'BillRefNumber' => $request->BillRefNumber,
            'InvoiceNumber' => $request->InvoiceNumber,
            'OrgAccountBalance' => $request->OrgAccountBalance,
            'ThirdPartyTransID' => $request->ThirdPartyTransID,
            'MSISDN' => $request->MSISDN,
            'FirstName' => $request->FirstName,
            'MiddleName' => $request->MiddleName,
            'LastName' => $request->LastName,
            'PaymentMode' => 'Mpesa',

        ]);
    }

    public function registerUrls(){
        $token = Mpesa::generateSandBoxToken();

//        $url = 'https://api.safaricom.co.ke/mpesa/c2b/v1/registerurl';
        $url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token)); //setting custom header


        $curl_post_data = array(
            //Fill in the request parameters with valid values
            'ValidationURL' => 'https://kibe.braxlan.com/getValidation',
            'ConfirmationURL' => 'https://kibe.braxlan.com/getPayment',
            'ResponseType' => 'completed',
            'ShortCode' => '601426',

        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $curl_response = curl_exec($curl);
        print_r($curl_response);

        echo $curl_response;

    }
    public function getValidation(){

    }
 public function simulate()
 {
     $mpesa = new Mpesa();
     $c2bTransaction = $mpesa->c2b(601426, 'CustomerPayBillOnline', 40000, 254790268795, 'A1');
     var_dump($c2bTransaction);

 }
 public function lipaNaMpesa(){

     $token = Mpesa::generateSandBoxToken();
     $user = Auth::user()->phone;
     $consNumber = 254;
     $tUser = $consNumber. $user;
     $amount =Auth::user()->amount;
     $shortCode = '174379';
     $timestamp ='20201016213045';
     $passKey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

     $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
     $password = base64_encode($shortCode.$passKey.$timestamp);

     $curl = curl_init();
     curl_setopt($curl, CURLOPT_URL, $url);
     curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token)); //setting custom header


     $curl_post_data = array(
         //Fill in the request parameters with valid values
         'BusinessShortCode' => '174379',
         'Password' => $password,
         'Timestamp' => '20201016213045',
         'TransactionType' => 'CustomerPayBillOnline',
         'Amount' =>$amount,
         'PartyA' => $tUser,
         'PartyB' => '174379',
         'PhoneNumber' => $tUser,
         'CallBackURL' => 'https://kibe.braxlan.com/getPayment',
         'AccountReference' => 'Test',
         'TransactionDesc' => 'testing'
     );

     $data_string = json_encode($curl_post_data);

     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($curl, CURLOPT_POST, true);
     curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

     $curl_response = curl_exec($curl);
     print_r($curl_response);

     echo 'Input Pin';
 }

}
