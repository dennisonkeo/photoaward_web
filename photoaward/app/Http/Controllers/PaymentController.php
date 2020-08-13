<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Config;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\ImagePay;
use App\Payment;
use App\Upload;
use App\User;
use Auth;

class PaymentController extends Controller
{
    
        public static function generateLiveToken(){
        
        try {
            // $consumer_key = env("MPESA_CONSUMER_KEY");
            // $consumer_key = config('app.MPESA_CONSUMER_KEY');
            $consumer_key = 'wnVlDhb4HMxi6j6HbaxbRxhAaPGUQ1WL';
            $consumer_secret = 'vwrHrrBRGFrx8yX9';
        } catch (\Throwable $th) {
            // $consumer_key = self::env("MPESA_CONSUMER_KEY");
            $consumer_key = self::config('app.MPESA_CONSUMER_KEY');
            // $consumer_secret = self::env("MPESA_CONSUMER_SECRET");
            $consumer_secret = self::config('app.MPESA_CONSUMER_SECRET');
        }

        if(!isset($consumer_key)||!isset($consumer_secret)){
            die("please declare the consumer key andHHHHH consumer secret as defined in the documentation");
        }
        $url = 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        $credentials = base64_encode($consumer_key.':'.$consumer_secret);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials)); //setting a custom header
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $curl_response = curl_exec($curl);

        return json_decode($curl_response)->access_token;


    }

	public function store()
	{
		// $mpesa= new \Safaricom\Mpesa\Mpesa();

		// $refNo = str_random(6);

					$images = Upload::where('user_id', Auth::user()->id)->where('uploaded','no')->get();

			        $imagesgroup = Upload::where('user_id', Auth::user()->id)->where('uploaded','no')->get();

			        $total_amount = 0;

			        $total = 0;

			        foreach($imagesgroup->groupby('category_id') as $image)
			        {
			            foreach($image as $img)
			            {
			            	if($img->track == "Professionals")
			            	{
				            	$total = count($image)*200;
				                break;
			            	}
			            	else
			            	{
			            		$total = count($image)*100;
			                	break;
			            	}
			                 
			            }

			            $total_amount += $total;
			        }

<<<<<<< HEAD
		$BusinessShortCode = "523608";
		$LipaNaMpesaPasskey = "78dbd4c3ecda6503b00be053264fe0760ae70f7c5c0c3c6f49869fbc5ccdb346";
		$TransactionType = "CustomerPayBillOnline";
		$Amount = $total_amount;
		$PartyA = Auth::user()->phone;
		$PartyB = "523608";
		$PhoneNumber = Auth::user()->phone;
		$CallBackURL = 'https://picture254.com/api/mpesa-response';
		$AccountReference = Auth::user()->phone;
		$TransactionDesc = "Payment";

		$Remarks = "Yess";
	        	   $pay = new Payment();

			$BusinessShortCode = "523608";
          $LipaNaMpesaPasskey = "NTIzNjA4NzhkYmQ0YzNlY2RhNjUwM2IwMGJlMDUzMjY0ZmUwNzYwYWU3MGY3YzVjMGMzYzZmNDk4NjlmYmM1Y2NkYjM0NjIwMTkxMTE4MTUzMzQ4";
          $TransactionType = "CustomerPayBillOnline";
          $Amount = '1';
          $PartyA = Auth::user()->phone;
          $PartyB = "523608";
          $PhoneNumber = Auth::user()->phone;
          $CallBackURL = 'http://picture254.com/api/mpesa-reply';
          $AccountReference = Auth::user()->phone;
          $TransactionDesc = "Payment";
          $Remarks = "Yess";

          $stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
             );
                // return $stkPushSimulation;
          // $check = $stkPushSimulation; 
	      //   	   $pay = new Payment();
>>>>>>> 3242e982ab9f3f03c0830a16e5f239a16c05ce18
=======
		// $BusinessShortCode = "523608";
		// $LipaNaMpesaPasskey = "78dbd4c3ecda6503b00be053264fe0760ae70f7c5c0c3c6f49869fbc5ccdb346";
		// $TransactionType = "CustomerPayBillOnline";
		// $Amount = $total_amount;
		// $PartyA = Auth::user()->phone;
		// $PartyB = "523608";
		// $PhoneNumber = Auth::user()->phone;
		// $CallBackURL = 'https://picture254.com/api/mpesa-response';
		// $AccountReference = Auth::user()->phone;
		// $TransactionDesc = "Payment";
		// $Remarks = "Yess" ;

		// 	// $BusinessShortCode = "523608";
  //  //        $LipaNaMpesaPasskey = "NTIzNjA4NzhkYmQ0YzNlY2RhNjUwM2IwMGJlMDUzMjY0ZmUwNzYwYWU3MGY3YzVjMGMzYzZmNDk4NjlmYmM1Y2NkYjM0NjIwMTkxMTE4MTUzMzQ4";
  //  //        $TransactionType = "CustomerPayBillOnline";
  //  //        $Amount = '1';
  //  //        $PartyA = Auth::user()->phone;
  //  //        $PartyB = "523608";
  //  //        $PhoneNumber = Auth::user()->phone;
  //  //        $CallBackURL = 'http://picture254.com/api/mpesa-reply';
  //  //        $AccountReference = Auth::user()->phone;
  //  //        $TransactionDesc = "Payment";
  //  //        $Remarks = "Yess";

  //         $stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
  //            );
  //               // return $stkPushSimulation;
  //         // $check = $stkPushSimulation; 
	 //      //   	   $pay = new Payment();
>>>>>>> ddf3c50d42f7469a184b6b6be0cd99b5d7da1a5b
				             
		// 		   // $pay->phone = Auth::user()->phone;
		// 		   // $pay->trans_no = $trans_no;
		// 		   // $pay->account_no = $account_no;
		// 		   // $pay->trans_date = $trans_date;
		// 		   // $pay->amount = $amount;

				             
		// 		   //  $pay->save();

		// 		    // Upload::where('user_id', Auth::user()->id)
		// 	     //                            ->where('uploaded','no')
		// 	     //                            ->update(array('uploaded' => 'yes'));
				             
		// 		    // ImagePay::where('account_no', $account_no)
		// 		    //          ->update(array('status' => 'Paid'));

		// 		return response()->json('Success');
		// 	                           // $upload->account_no = $check;
			             
		// 	                           // $upload->save();
			             
		// 	                        // Upload::where('user_id', Auth::user()->id)
		// 	                        //         ->where('uploaded','no')
		//

		$url = 'https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
        $token = self::generateLiveToken();

        $LipaNaMpesaPasskey = " bab1285e1094bc6c69c3e17efd9ccef52e10c6ce1cb99627b1135125467dd3a9";
        $BusinessShortCode = "5018197";
        $TransactionType = "CustomerPayBillOnline";
        $CallBackURL = 'https://d2154ab6.ngrok.io/api/mpesa-response';
        $timestamp='20'.date(    "ymdhis");
        $password=base64_encode($BusinessShortCode.$LipaNaMpesaPasskey.$timestamp);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$token));


        $curl_post_data = array(
            "BusinessShortCode" => "523608",
            "Password" => "NTIzNjA4NzhkYmQ0YzNlY2RhNjUwM2IwMGJlMDUzMjY0ZmUwNzYwYWU3MGY3YzVjMGMzYzZmNDk4NjlmYmM1Y2NkYjM0NjIwMTkxMTE4MTUzMzQ4",
            "Timestamp" => "20191118153348",
            "TransactionType" => "CustomerBuyGoodsOnline",
        	"Amount" => $total_amount,
            "PartyA" =>  Auth::user()->phone,
            "PartyB" => "523608",
            "PhoneNumber" =>  Auth::user()->phone,
            "CallBackURL" => "https://picture254.com/api/mpesa-response",
            "AccountReference" => Auth::user()->phone,
            "TransactionDesc" => "Pay for your goods"
        );

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $curl_response=curl_exec($curl);

        // $handle=fopen("assets/transaction.txt", 'w');
        // fwrite($handle, $curl_response);
        $result = json_decode($curl_response)->MerchantRequestID; 	                        //         ->update(array('uploaded' => 'yes'));

		return response()->json('0');
		
	}

	public function mpesa_response(Request $request)
	{

		$mpesa= new \Safaricom\Mpesa\Mpesa();

		// $callbackJSONData = $mpesa->getDataFromCallback();

		$callbackJSONData=file_get_contents('php://input');

		// $handle=fopen("uploads/transactions.txt", 'w');

  //       fwrite($handle, $callbackJSONData);

		$account_no = json_decode($callbackJSONData)->Body->stkCallback->MerchantRequestID;

		$ResultCode = json_decode($callbackJSONData)->Body->stkCallback->ResultCode;

		if($ResultCode == "0")

		{
			$amount = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[0]->Value;
	        $phone = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[4]->Value;
	        $trans_no = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[1]->Value;
	        $trans_date = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[3]->Value;

	        $transExists = Payment::where('trans_no', $trans_no)->get();

	        	   $pay = new Payment();
				             
				   $pay->phone = $phone;
				   $pay->trans_no = $trans_no;
				   $pay->account_no = $account_no;
				   $pay->trans_date = $trans_date;
				   $pay->amount = $amount;
				             
				    $pay->save();

				    Upload::where('user_id', Auth::user()->id) ->update(array('uploaded' => 'yes'));
				             
				    ImagePay::where('account_no', $account_no)
				             ->update(array('status' => 'Paid'));

				return response()->json('Success');

			}
			else
			{
				return response()->json('Something Went Wrong!');
			}

        

		// $handle=fopen("uploads/transaction2.txt", 'w');
  //       fwrite($handle, $result2);

	}
}
