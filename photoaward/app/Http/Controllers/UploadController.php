<?php

namespace App\Http\Controllers;

use App\Upload;
use App\Category;
use App\ImagePay;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Auth;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload_details');
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
        // $imageName = $request->file->getClientOriginalName();

        // $request->file->move(public_path('uploads'),$imageName);

        $token = Str::random();

        $image = $request->file('file');

        $image_name = time().$image->getClientOriginalName();

        $image->move(public_path('uploads'),$image_name);

        $imagePath = "/uploads/$image_name";

        $upload = new Upload();

          $upload->imageName = $image_name;
          $upload->imagePath = $imagePath;
          $upload->token = $request->input("_token");
          $upload->caption = "";
          $upload->user_id = Auth::user()->id;
          $upload->category_id = $request->input("category");

          $upload->save();

        return response()->json(['uploaded'=>'/uploads/'.$image_name]);

          // return redirect('login')->with('success', 'Thank you for registering with us.');
          // return "Done";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
