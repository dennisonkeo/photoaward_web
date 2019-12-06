<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AuthAccessToken;
use App\Vote;
use App\Upload;
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

    public function logout(Request $request)
    {
        if (Auth::guard('api')->check()) {

            $user = new User();
            $user->AauthAcessToken()->delete();

       return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
    else{
        return response()->json([
            'message' => 'Error'
        ]);
    }        
    }

    public function get_rate_count($id)
    {
    	$count = Vote::where('upload_id', $id)->get()->count();

    	return response()->json(['likes'=>$count]);
    }


    public function like_image($upload_id)
    {

        if(Auth::guard('api')->check())
        {
        $verifyliked = Vote::where('upload_id', $upload_id)->where('user_id',Auth::user()->id)->first();


        if(!$verifyliked)

             {
                        $like = new Vote();
             
                           $like->liked = 1;
                           $like->upload_id = $upload_id;
                           $like->user_id = Auth::user()->id;
             
                           $like->save();

                $get_likes = Vote::where('upload_id', $upload_id)->count();


                // echo $get_likes;

                        return response()->json(["likes"=>$get_likes]);
            }
            else
            {
              $get_likes = Vote::where('upload_id', $upload_id)->count();


                // echo $get_likes;

                        return response()->json(["likes"=>$get_likes]);
            }

        }

        else
        {
            return response()->json(["Error"=>"Unauthorised"]);
        }
    }

public function getImages()
{
    // $uploads = Upload::latest()->get();
    $uploads = Upload::withCount('votes')->latest()->get();

    return response()->json(["data"=>$uploads]);
}

}
