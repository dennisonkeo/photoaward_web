<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Cart;
use App\user;
use App\Upload;
use App\Payment;
use App\Purchase;
use Config;


use Auth;

class CartController extends Controller
{
    
    	public function index()
    	{
        $cart = Cart::where('user_id',Auth::user()->id)
      ->where('token', session()->getId())->get();

    		return view('checkout', compact('cart'));
    	}

    	public function addToCart()
    	{
    		 
    		 $upload_id = $_POST['upload_id'];

                        $cart = new Cart();

                        
             
                           $cart->user_id = Auth::user()->id;
                           $cart->upload_id = $upload_id;
                           $cart->token = session()->getId();
                           $cart->save();


                $get_total = Cart::where('user_id',Auth::user()->id)
                			->where('token',session()->getId())
                			->count();

                        return response()->json($get_total);

    	}

        public function checkout()
        {

          $mpesa= new \Safaricom\Mpesa\Mpesa();

          $refNo = str_random(6);

          $items = Cart::where('token',session()->getId())->where('user_id',Auth::user()->id)->get();

          $cart_amount = (count($items)*100);

          $BusinessShortCode = "174379";
          $LipaNaMpesaPasskey = "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTgwODE0MDg1NjIw";
          $TransactionType = "CustomerPayBillOnline";
          $Amount = $cart_amount;
          $PartyA = Auth::user()->phone;
          $PartyB = "174379";
          $PhoneNumber = Auth::user()->phone;
          $CallBackURL = 'https://84738818.ngrok.io/api/mpesa-reply';
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

                                    $purchase = new Purchase();
                         
                                       $purchase->amount = $cart_amount;
                                       $purchase->images = count($items);
                                       $purchase->user_id = Auth::user()->id;
                                       $purchase->accountno = $check;
                         
                                       $purchase->save();
                         
                                    // Upload::where('token',"=", session()->getId())
                                    //         ->where('uploaded','no')
                                    //         ->update(array('uploaded' => 'yes'));

                                    return response()->json('0');
          }

        }

    public function mpesa_reply(Request $request)
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
                       
              Purchase::where('accountno',"=", $account_no)
                       ->update(array('purchased' => 1));

          return response()->json('Success');
        }
        else
        {
          return response()->json('Something Went Wrong!');
        }

    }

      public function destroy(Cart $cart)
      {
          $cart->delete();

          return response()->json("Removed!");
      }
}
