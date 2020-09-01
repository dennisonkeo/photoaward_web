<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Cart;
use App\user;
use App\Upload;
use App\Payment;
use App\Notifications\HelloUser;
use App\Purchase;
use Config;
use Response;

use Auth;

class CartController extends Controller
{
    
    public function sendMail()
    {

     
      $user = Auth::user();

      $user->notify(new HelloUser());

       $purchases = Purchase::where('accountno', '30468-201429-1')->get();

       // dd($purchases);

        foreach($purchases as $purchase)
        {
            $user = User::where('id', $purchase->cart->upload->user->id)->first();
      
            $user->notify(new HelloUser());

        }
    }
    	public function index()
    	{
      //   $cart = Cart::where('user_id',Auth::user()->id)
      // ->where('token', session()->getId())->get();

      $purchased_items = Purchase::where('token',session()->getId())->where('user_id',Auth::user()->id)->pluck('cart_id')->all();

          $cart = Cart::whereNotIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())->get();

          $category = "";

    		return view('checkout', compact('cart', 'category'));
    	}

      public function show_download()
      {

      $purchased_items = Purchase::where('token',session()->getId())->where('purchased',1)->where('user_id',Auth::user()->id)->pluck('cart_id')->all();

          $cart = Cart::whereIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())->get();

         $category = "";

        return view('checkout_download', compact('cart', 'category'));
      }

      public function download_image($path)
      {

          return Response::download('uploads_org/'.$path);
      }

    	public function addToCart(Request $request)
    	{
    		 
    		 $upload_id = $_POST['upload_id'];

                        $cart = new Cart();

                        
             
                           $cart->user_id = Auth::user()->id;
                           $cart->upload_id = $upload_id;
                           $cart->size = $request->input('size');
                           $cart->token = session()->getId();
                           $cart->save();

            $purchased_items = Purchase::where('token',session()->getId())->where('user_id',Auth::user()->id)->pluck('cart_id')->all();


                $get_total =Cart::whereNotIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())
                			->count();

                        return response()->json($get_total);

    	}

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

        public function checkout()
        {

          $mpesa= new \Safaricom\Mpesa\Mpesa();

          $refNo = str_random(6);

          // $current_purchases = Purchase::where('user_id', Auth::user()->id)
          //                               ->where('token', session()->getId())
          //                               ->get();


          // $carts = Cart::whereNotIn('id', $current_purchases)
          //       // ->where('selected',1)
          //       ->get();

          //       dd($carts);
          // $students = \App\Student::whereDoesntHave('academics')
          //   ->orWhereHas('academics',function($q) use ($academic){
          //     $q->where('id',$academic->id)->count();
          //   },'=',0)->get();

          $purchased_items = Purchase::where('token',session()->getId())->where('user_id',Auth::user()->id)->pluck('cart_id')->all();

          $carts = Cart::whereNotIn('id', $purchased_items)->where('user_id', Auth::user()->id)->where('token', session()->getId())->get();

          $cart_amount = (($carts->sum('size'))*100);

          if($cart_amount > 70000)
          {
            return response()->json('1');

            return false;
          }

          // dd($cart_amount);

          // $items = Cart::where('token',session()->getId())->where('user_id',Auth::user()->id)->get();


          // $BusinessShortCode = "523608";
          // $LipaNaMpesaPasskey = "NTIzNjA4NzhkYmQ0YzNlY2RhNjUwM2IwMGJlMDUzMjY0ZmUwNzYwYWU3MGY3YzVjMGMzYzZmNDk4NjlmYmM1Y2NkYjM0NjIwMTkxMTE4MTUzMzQ4";
          // $TransactionType = "CustomerPayBillOnline";
          // $Amount = $cart_amount;
          // $PartyA = Auth::user()->phone;
          // $PartyB = "523608";
          // $PhoneNumber = Auth::user()->phone;
          // $CallBackURL = 'https://picture254.com/api/mpesa-reply';
          // $AccountReference = Auth::user()->phone;
          // $TransactionDesc = "Payment";
          // $Remarks = "Yess";

          // $stkPushSimulation = $mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, 
          //                         $TransactionType, $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference, $TransactionDesc, $Remarks
          //                         );
          //       // return $stkPushSimulation;
          // $check = $stkPushSimulation; 

          // $callbackJSONData=file_get_contents('php://input');
          // $handle=fopen("uploads/transaction.txt", 'w');
          // fwrite($handle, $stkPushSimulation);

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
          "Amount" => $cart_amount,
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
        $check = json_decode($curl_response)->MerchantRequestID;      

          if($check !="")
          {
                                foreach($carts as $cart)
                                {
                                      
                                      $purchase = new Purchase();
                         
                                       $purchase->amount = 100;
                                       $purchase->user_id = Auth::user()->id;
                                       $purchase->accountno = $check;
                                       $purchase->cart_id = $cart->id;
                                       $purchase->token = session()->getId();
                         
                                       $purchase->save();

                                }
                                    
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

      // $handle=fopen("uploads/transaction.txt", 'w');
      //     fwrite($handle, $callbackJSONData);


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


            $purchases = Purchase::where('accountno', $account_no)->get();

            foreach($purchases as $purchase)
            {
                $user = User::where('id', $purchase->cart->upload->user->id)->first();
          
                $user->notify(new HelloUser());
            }

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
