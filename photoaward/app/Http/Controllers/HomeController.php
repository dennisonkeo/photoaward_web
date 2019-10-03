<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ImagePay;
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

    public function upload_info()
    {
        
        $images = ImagePay::where('user_id', Auth::user()->id)->latest()->get()->first();

        $totalPay = $images->total_images * 100;

        return view('upload_view', compact("images", "totalPay"));
    }

    public function upload_image()
    {
        
        return view('upload_image');
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
            'phone' => ['required', 'string', 'max:13'],
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
    
    return view('submit', compact("records"));
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
