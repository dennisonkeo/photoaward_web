<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ImagePay;
use App\Upload;
use App\Category;
use Auth;
use Illuminate\Support\Facades\Hash;

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

    public function upload_image($id)
    {
        $category = Category::where('id',$id)->first();

        return view('upload_image', compact('category'));
    }

    public function new_upload()
    {
        
        return view('image_add');
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
         $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:13','regex:/(2547)[0-9]{8}/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']

            ]);

           $user = new User();

          $user->name = $request->input("name");
          $user->email = $request->input("email");
          $user->phone = $request->input("phone");
          $user->password = Hash::make($request->input("password"));

          $user->save();
 
        return redirect('login')->with('success', 'Thank you for registering with us.');
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
    $records = ImagePay::where('user_id', Auth::user()->id)->latest()->get();

    $categories = Category::all();
    
    return view('submit', compact("records", "categories"));
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
    public function update(Request $request, $id)
    {
        //
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
