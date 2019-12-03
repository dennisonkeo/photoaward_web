<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Vote;
use Auth;

class MobileAppController extends Controller
{
   public $successStatus = 200;


// login function

  public function login()
        
  {

        if(Auth::attempt(['email' => request('username'), 'password' => request('password')])
        	||
        	Auth::attempt(['phone' => request('username'), 'password' => request('password')])
        )
        {
        	$user = Auth()->user();

            $success['token'] =  $user->createToken('MyApp')->accessToken;

             return response()->json(['success' => $success,'data' => $user], $this->successStatus);
        }

        else
        {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function user_loggedin()
    {
    	if(Auth::guard('api')->check())
    	{
    		return response()->json(['status'=>true]);
    	}
    	else
    	{
    		return response()->json(['status'=>false]);
    	}
    }

    public function get_rate_count($id)
    {
    	$count = Vote::where('upload_id', $id)->get()->count();

    	return response()->json(['likes'=>$count]);
    }
}
