<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AuthAccessToken;
use App\Vote;
use App\Upload;
use App\Category;
use App\ImagePay;
use Illuminate\Support\Facades\File;
use Image;
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

    public function store(Request $request)
    {

            $originalImage= $request->file('file');

            $image = $request->file('file');

            $image_name = time().$image->getClientOriginalName();

            $image->move(public_path('uploads_org'),$image_name);

            $imagePath = "uploads_org/$image_name";



            $img = Image::make(public_path('uploads_org/'.$image_name));

            /* insert watermark at the center with 10px offset */

            $img->insert(public_path('images/watermark.png'), 'center', 10, 10);

           

            $img->save(public_path('uploads/'.$image_name)); 


              $upload = new Upload();

              $upload->imageName = $image_name;
              $upload->imagePath = $imagePath;
              $upload->token = session()->getId();
              $upload->caption = "";
              $upload->device = "";
              $upload->uploaded = "no";
              $upload->user_id = Auth::user()->id;
              $upload->category_id = $request->input("category");
              $upload->track = $request->input("track");

              $upload->save();

            return response()->json(['uploaded'=>'/uploads/'.$image_name]);
    }

    public function cart()
    {
        if(Auth::guard('api')->check())
        {
            $uploads = Upload::where('user_id',Auth::user()->id)->where('uploaded', 'no')->count();

            return response()->json(['cart'=>$uploads]);
        }
        else
        {
            return response()->json(['cart'=>0]);
        }
    }

    public function cart_photos()
    {
        $cost = 0;

        $uploads = Upload::where('user_id',Auth::user()->id)->where('uploaded', 'no')->get();

        foreach($uploads as $upload)
        {
            $cost += $upload->category->amount;
        }

        
        return response()->json(['photos'=>$uploads, 'cost'=>$cost]);

    }

    public function update(Request $request)
    {
        Upload::where('id',"=", $request->input('image_id'))->update(array('caption' => $request->input('caption'),'device' => $request->input('device'),'name' => $request->input('name')));

        return response()->json(['msg'=>'Details were saved Successfully']);  
    } 


    public function destroy(Upload $upload)
    {
        File::delete([public_path($upload->imagePath)]);
        $upload->delete();

        return response()->json(['msg'=>'Image Deleted Successfully']); 
    }

    public function categories()
    {
        $categories = Category::all();

        return response()->json(['cat'=>$categories]);  
    }

    public function history()
    {
        $history = ImagePay::where('user_id', Auth::user()->id)->latest()->get();

        return response()->json(['hist'=>$history]);  
    }

}
