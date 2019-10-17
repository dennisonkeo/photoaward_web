<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class PaymentController extends Controller
{
    

	public function store()
	{

		$mpesa= new \Safaricom\Mpesa\Mpesa();

		$BusinessShortCode = "174379";
		$LipaNaMpesaPasskey = "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTgwODE0MDg1NjIw";
		$TransactionType = "CustomerPayBillOnline";
		$Amount = "1";
		$PartyA = "254708552578";
		$PartyB = "174379";
		$PhoneNumber = "254708552578";
		$CallBackURL = 'https://eb6e2bd7.ngrok.io/mpesa-response';
		$AccountReference = "ADB123";
		$TransactionDesc = "Payment";
		$Remarks = "Yess";

		$stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, 
														$TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
														);

		return $stkPushSimulation;		
	}

	public function mpesa_response()
	{
		// $request->session()->token();
		// headers:{'X-CSRF-Token': '{{ csrf_token() }}'}

		// header('X-CSRF-Token: csrf_token()');

		$mpesa= new \Safaricom\Mpesa\Mpesa();

		$callbackData = $mpesa->getDataFromCallback();

		// $callbackJSONData=file_get_contents('php://input');

		// $handle=fopen("uploads/transaction.txt", 'w');
  //       fwrite($handle, $callbackData);

		// if($callbackData)
		// {
		// 	$mpesa->finishTransaction();

		// 	$handle=fopen("uploads/transaction1.txt", 'w');
  //       	fwrite($handle, $mpesa->finishTransaction());
		// }
		// else
		// {
		// 	$mpesa->finishTransaction(false);
		// 	$handle=fopen("uploads/transaction1.txt", 'w');
  //       	fwrite($handle, $mpesa->finishTransaction(false));
		// }
		
		 // $message = array("ResultCode"=> 0,"ResultDesc"=> "success");
	
  // respond to safaricom servers with a success message
  // echo json_encode($message);  

		 // return json_encode($message);
		 $mpesa->finishTransaction();

		 // echo json_encode($message);
	}
}
