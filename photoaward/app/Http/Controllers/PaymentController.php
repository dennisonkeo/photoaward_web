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
    

	public function store()
	{
		$mpesa= new \Safaricom\Mpesa\Mpesa();

		$refNo = str_random(6);

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

		$BusinessShortCode = "523608";
		$LipaNaMpesaPasskey = "78dbd4c3ecda6503b00be053264fe0760ae70f7c5c0c3c6f49869fbc5ccdb346";
		$TransactionType = "CustomerPayBillOnline";
		$Amount = $total_amount;
		$PartyA = Auth::user()->phone;
		$PartyB = "523608";
		$PhoneNumber = Auth::user()->phone;
		$CallBackURL = 'http://picture254.com/api/mpesa-response';
		$AccountReference = Auth::user()->phone;
		$TransactionDesc = "Payment";
		$Remarks = "Yess";


		$stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, 
														$TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
														);
// return $stkPushSimulation;

		$check = $stkPushSimulation;

		$callbackJSONData=file_get_contents('php://input');

		// $handle=fopen("uploads/transaction.txt", 'w');
  //       fwrite($handle, $stkPushSimulation);


		if($check !="")
		{


			                        $upload = new ImagePay();
			             
			                           $upload->amount = $total_amount;
			                           $upload->token = session()->getId();
			                           $upload->total_images = count($imagesgroup);
			                           $upload->user_id = Auth::user()->id;
			                           $upload->account_no = $check;
			             
			                           $upload->save();
			             
			                        // Upload::where('user_id', Auth::user()->id)
			                        //         ->where('uploaded','no')
			                        //         ->update(array('uploaded' => 'yes'));

			                        return response()->json('0');
		}
	}

	public function mpesa_response(Request $request)
	{

		$mpesa= new \Safaricom\Mpesa\Mpesa();

		// $callbackJSONData = $mpesa->getDataFromCallback();

		$callbackJSONData=file_get_contents('php://input');

		// $handle=fopen("uploads/transactions.txt", 'w');

        // fwrite($handle, $callbackJSONData);

		$account_no = json_decode($callbackJSONData)->Body->stkCallback->MerchantRequestID;

		$ResultCode = json_decode($callbackJSONData)->Body->stkCallback->ResultCode;

		if($ResultCode == "0")

		{
			$amount = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[0]->Value;
	        $phone = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[4]->Value;
	        $trans_no = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[1]->Value;
	        $trans_date = json_decode($callbackJSONData)->Body->stkCallback->CallbackMetadata->Item[3]->Value;

	        $pay = new Payment();
				             
				   $pay->phone = $phone;
				   $pay->trans_no = $trans_no;
				   $pay->account_no = $account_no;
				   $pay->trans_date = $trans_date;
				   $pay->amount = $amount;

				             
				    $pay->save();

				    Upload::where('user_id', Auth::user()->id)
			                                ->where('uploaded','no')
			                                ->update(array('uploaded' => 'yes'));
				             
				    ImagePay::where('account_no',"=", $account_no)
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
