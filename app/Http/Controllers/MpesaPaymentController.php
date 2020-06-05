<?php

namespace App\Http\Controllers;

use App\Mpesapayment;
use Illuminate\Http\Request;
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
 public function simulate(){
     $mpesa= new Mpesa();
     $c2bTransaction= $mpesa->c2b(601426, 'CustomerPayBillOnline', 40000, 254790268795, 'A1' );
     var_dump($c2bTransaction);

 }
 public function lipaNaMpesa(){
     $mpesa= new \Safaricom\Mpesa\Mpesa();
     $BusinessShortCode = 174379;
     $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
     $TransactionType = 'CustomerPayBillOnline';
     $Amount = 40000;
     $PartyA = 254769722803;
     $PartyB = 174379;
     $PhoneNumber = 254769722803;
     $CallBackURL = 'https://kibe.braxlan.com/getPayment';
     $AccountReference = 'OK';
     $TransactionDesc = 'OK';
     $Remarks = 'OK';

     $stkPushSimulation=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks);
     var_dump($stkPushSimulation);
 }

}
