<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ImagePay;
use App\Upload;
use App\Category;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('index');
    }

    public function about()
    {
        
        return view('about');
    }

    public function registration()
    {
        
        return view('register');
    }

    public function login()
    {
        
        return view('login');
    }

    public function album()
    {
        $uploads=Upload::all();
        
        return $uploads;
    }

    public function response()
    {
        
         

        // $data_string = json_encode($curl_post_data); curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); curl_setopt($curl, CURLOPT_POST, true); curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string); $curl_response = curl_exec($curl); //print_r($curl_response); echo $curl_response; 
    }

    public function my_gallery()
    {
        
        $first = Upload::where('user_id',Auth::user()->id)->where('uploaded','yes')->latest()->first();

        $images = Upload::where('user_id',Auth::user()->id)->where('uploaded','yes')->latest()->get();


        return view('image_gallery', compact('images','first'));
    }

    public function upload_info()
    {
        
        $categories = Category::all();

        return view('upload_view', compact('categories'));
    }

    public function upload_image($id,$track)
    {
        $category = Category::where('id',$id)->first();

        return view('upload_image', compact('category', 'track'));
    }

    public function new_upload()
    {
        
        return view('image_add');
    }

    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();

        return view('profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
         // $this->validate($request,[
         //    'name' => ['required', 'string', 'max:255'],
         //    'phone' => ['required', 'string', 'max:13','regex:/(2547)[0-9]{8}/'],
         //    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         //    'password' => ['required', 'string', 'min:8']

         //    ]);

         $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:13','regex:/(2547)[0-9]{8}/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
            ]);

         if($validator->fails())
         {
            return redirect()->back()->withInput()->withErrors($validator);
         }

           $user = new User();

           $verify_phone = User::where('phone',$request->input("phone"))->first();

          if($verify_phone)
         {
            return back()->with('warning', 'The phone number has already been taken.');
         }
         else
         {
            $user->name = $request->input("name");
          $user->email = $request->input("email");
          $user->phone = $request->input("phone");
          $user->password = Hash::make($request->input("password"));

          $user->save();

        if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password]) ||

        Auth::attempt([
        'phone' => $request->phone,
        'password' => $request->password])
        )
        {
            return redirect('submit-entry')->with('success', 'Thank you for registering with us.');
        }
        else
        {
            // return redirect('login')->with('warning', 'Thank you for registering with us.');
        }
 
         }

    }    


    public function add_buyer(Request $request)
    {
         $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:13','regex:/(2547)[0-9]{8}/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']

            ]);

         $verify_phone = User::where('phone',$request->input("phone"))->first();

         if($verify_phone)
         {
            return back()->with('warning', 'The phone number has already been taken.');
         }
         else
         {
             $user = new User();

          $user->name = $request->input("name");
          $user->email = $request->input("email");
          $user->phone = $request->input("phone");
          $user->password = Hash::make($request->input("password"));

          $user->save();

        if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password]) ||

        Auth::attempt([
        'phone' => $request->phone,
        'password' => $request->password])
        )
        {
            return redirect('stock-album')->with('success', 'Thank you for registering with us.');

            // return response()->json('Thank you for registering with us.');
        }
        else
        {
            // return redirect('login')->with('warning', 'Thank you for registering with us.');
            return response()->json('Sorry, something went wrong..');

        }
         }

             
    }

    public function signup_user(Request $request)
    {
         $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:13','regex:/(2547)[0-9]{8}/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']

            ]);

         $verify_phone = User::where('phone',$request->input("phone"))->first();

         if($verify_phone)
         {
            return back()->with('warning', 'The phone number has already been taken.');
         }
         else
         {

           $user = new User();

          $user->name = $request->input("name");
          $user->email = $request->input("email");
          $user->phone = $request->input("phone");
          $user->password = Hash::make($request->input("password"));

          $user->save();

        if (Auth::attempt([
        'email' => $request->email,
        'password' => $request->password]) ||

        Auth::attempt([
        'phone' => $request->phone,
            'password' => $request->password])
        )
        {
            return redirect('like-image')->with('success', 'Thank you for registering with us.');
        }
        else
        {
            // return redirect('login')->with('warning', 'Thank you for registering with us.');
        }
         }

 
        
    }

    
public function login_user(Request $request){
    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
        ]);
    if (Auth::attempt([
        'email' => $request->username,
        'password' => $request->password]) ||

        Auth::attempt([
        'phone' => $request->username,
        'password' => $request->password])
    )
    {
        return redirect('submit-entry');
    }
    return redirect('login')->with('warning', 'Invalid Email address/Phone or Password');
}

public function login_buyer(Request $request){
    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
        ]);
    if (Auth::attempt([
        'email' => $request->username,
        'password' => $request->password]) ||

        Auth::attempt([
        'phone' => $request->username,
        'password' => $request->password])
    )
    {
        return redirect('stock-album');
    }
    return back()->with('warning', 'Invalid Email address/Phone or Password');    // return response()->json('Invalid Email address/Phone or Password.');

}

public function login_user_like(Request $request){
    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
        ]);
    if (Auth::attempt([
        'email' => $request->username,
        'password' => $request->password]) ||

        Auth::attempt([
        'phone' => $request->username,
        'password' => $request->password])
    )
    {
        return redirect('like-image');
    }
    return back()->with('warning', 'Invalid Email address/Phone or Password');
}
/* GET
*/
public function logout(Request $request)
{
    if(Auth::check())
    {
        Auth::logout();
        $request->session()->invalidate();
    }
    return  redirect('/');
}

public function show_submit()
{
    $avatar = User::where('id', Auth::user()->id)->first();

    $records = ImagePay::where('user_id', Auth::user()->id)->latest()->get();

    $categories = Category::all();
    
    return view('submit', compact("records", "categories", "avatar"));
}

public function show_account()
{
    $user = User::where('id', Auth::user()->id)->first();
    
    return view('account', compact("user"));
}

public function account_reset(Request $request)
{

    $user = User::where('id', Auth::user()->id)->first();

    Hash::make($request->input("password"));
    $email = $request->input('email');
    $password = $request->input('password');
    $current = $request->input('current_password');

     


    if($password !="" && $email !="")
    {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            ]);
        if( password_verify($current, Auth::user()->password))
        {
            user::where('id', Auth::user()->id)
            ->update(array(
                'email' => $email,
                'password' => Hash::make($password),
            ));

            return back()->with('success', 'Details updated successfully!');  
        }
        else
        {
            return back()->with('warning', 'Sorry, Your Current Password is Incorrect!');  
        }
        
    } 

    else if($password =="" && $email !="")
    {
        $this->validate($request,[
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],

            ]);
        if( password_verify($current, Auth::user()->password))
        {
            user::where('id', Auth::user()->id)
            ->update(array(
                'email' => $email,
                // 'password' => Hash::make($password),
            ));

            return back()->with('success', 'Details updated successfully!');  
        }
        else
        {
            return back()->with('warning', 'Sorry, Your Current Password is Incorrect!');  
        }
        
    } 

    else if($password !="" && $email =="")
    {
        if( password_verify($current, Auth::user()->password))
        {
            user::where('id', Auth::user()->id)
            ->update(array(
                // 'email' => $email,
                'password' => Hash::make($password),
            ));

            return back()->with('success', 'Details updated successfully!');  
        }
        else
        {
            return back()->with('warning', 'Sorry, Your Current Password is Incorrect!');  
        }
        
    } 

    return back();  
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request)
    {
        $name = $request->input('name');
        $dname = $request->input('dname');
        $dob = $request->input('dob');
        $county = $request->input('county');
        $city = $request->input('city');
        $bio = $request->input('bio');
        $fb = $request->input('fb');
        $twitter = $request->input('tw');
        $insta = $request->input('ig');

        $image = $request->file('file');

        if($image != "")
        {

            $image_name = time().$image->getClientOriginalName();

            $image->move(public_path('uploads'),$image_name);

            $imagePath = "/uploads/$image_name";

        user::where('id', Auth::user()->id)
        ->update(array(
            'name' => $name,
            'dname' => $dname,
            'dob' => $dob,
            'county' => $county,
            'city' => $city,
            'bio' => $bio,
            'fb' => $fb,
            'tw' => $twitter,
            'ig' => $insta,
            'pic' => $image_name,
        ));

    }

    else
        {

        user::where('id', Auth::user()->id)
        ->update(array(
            'name' => $name,
            'dname' => $dname,
            'dob' => $dob,
            'county' => $county,
            'city' => $city,
            'bio' => $bio,
            'fb' => $fb,
            'tw' => $twitter,
            'ig' => $insta,
        ));

    }


        return back()->with('success', 'Details were edited Successfully');  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
