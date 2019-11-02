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

		$BusinessShortCode = "174379";
		$LipaNaMpesaPasskey = "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTgwODE0MDg1NjIw";
		$TransactionType = "CustomerPayBillOnline";
		$Amount = "1";
		$PartyA = Auth::user()->phone;
		$PartyB = "174379";
		$PhoneNumber = Auth::user()->phone;
		$CallBackURL = 'https://7b15726a.ngrok.io/api/mpesa-response';
		$AccountReference = $refNo;
		$TransactionDesc = "Payment";
		$Remarks = "Yess";


		$stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, 
														$TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
														);
// return $stkPushSimulation;
		$check = $stkPushSimulation;		

		if($check !="")
		{
					$images = Upload::where('token',session()->getId())->where('uploaded','no')->get();

			        $imagesgroup = Upload::where('token',session()->getId())->where('uploaded','no')->get();

			        $total_amount = 0;

			        $total = 0;

			        foreach($imagesgroup->groupby('category_id') as $image)
			        {
			            foreach($image as $img)
			            {
			                $total = count($image)*$img->category->amount;
			                break; 
			            }

			            $total_amount += $total;
			        }

			                        $upload = new ImagePay();
			             
			                           $upload->amount = $total_amount;
			                           $upload->token = session()->getId();
			                           $upload->total_images = count($imagesgroup);
			                           $upload->user_id = Auth::user()->id;
			                           $upload->account_no = $check;
			             
			                           $upload->save();
			             
			                        Upload::where('token',"=", session()->getId())
			                                ->where('uploaded','no')
			                                ->update(array('uploaded' => 'yes'));

			                        return response()->json('0');
		}
	}

	public function mpesa_response(Request $request)
	{

		$mpesa= new \Safaricom\Mpesa\Mpesa();

		// $callbackData = $mpesa->getDataFromCallback();

		$callbackJSONData=file_get_contents('php://input');

		$account_no = json_decode($callbackJSONData)->Body->stkCallback->MerchantRequestID;

		$ResultCode = json_decode($callbackJSONData)->Body->stkCallback->ResultCode;

		$handle=fopen("uploads/transaction.txt", 'w');
        fwrite($handle, $callbackJSONData);

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
