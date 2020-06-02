<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMpesapaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpesapayments', function (Blueprint $table) {
            $table->id();
            $table->string('TransactionType');
            $table->string('TransactionId')->nullable();
            $table->string('TransTime')->nullable();
            $table->integer('TransAmount');
            $table->string('BusinessShortCode');
            $table->string('BillRefNumber');
            $table->string('InvoiceNumber')->nullable();
            $table->string('OrgAccountBalance');
            $table->string('ThirdPartyTransID')->nullable();
            $table->string('MSISDN');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->string('LastName');
            $table->string('PaymentMode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mpesapayments');
    }
}
