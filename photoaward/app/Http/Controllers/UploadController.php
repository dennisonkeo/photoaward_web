<?php

namespace App\Http\Controllers;

use App\Upload;
use App\Category;
use App\ImagePay;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

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

    public function view_cart()
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

    $categories = Category::all();

        return view('view_cart', compact('images', 'imagesgroup', 'total_amount', 'categories'));
    }

    public function getImage($id)
    {
        $image = Upload::where('id',$id)->first();

        return json_encode($image);
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


        

        $imagePay = new ImagePay();

        $imageCheck = ImagePay::where('token',"=",$request->input('random_str'))
                    ->where('user_id',"=",Auth::user()->id)
                    ->first();
        // if(!$imageCheck)
        // {
            $image = $request->file('file');

            $image_name = time().$image->getClientOriginalName();

            $image->move(public_path('uploads'),$image_name);

            $imagePath = "/uploads/$image_name";


              $upload = new Upload();

              $upload->imageName = $image_name;
              $upload->imagePath = $imagePath;
              $upload->token = session()->getId();
              $upload->caption = "";
              $upload->user_id = Auth::user()->id;
              $upload->category_id = $request->input("category");

              $upload->save();

              // $saveImage = new ImagePay();

              // $saveImage->user_id = Auth::user()->id;
              // $saveImage->total_images = 1;
              // $saveImage->token = $request->input("random_str");

              // $saveImage->save();

            return response()->json(['uploaded'=>'/uploads/'.$image_name]);
        // }
        // else
        // {
        
        //     $image = $request->file('file');

        //     $image_name = time().$image->getClientOriginalName();

        //     $image->move(public_path('uploads'),$image_name);

        //     $imagePath = "/uploads/$image_name"; //save image path to folder


        //     $imageP = ImagePay::where("token", "=", $request->input('random_str'))->first();

        //     ImagePay::where('token',"=", $request->input('random_str'))->update(array('total_images' => ($imageP->total_images + 1)));

        //      $upload = new Upload();

        //       $upload->imageName = $image_name;
        //       $upload->imagePath = $imagePath;
        //       $upload->token = $request->input("random_str");
        //       $upload->caption = "";
        //       $upload->user_id = Auth::user()->id;
        //       $upload->category_id = $request->input("category");

        //       $upload->save();

        // return response()->json(['uploaded'=>'/uploads/'.$image_name]);
        // }

        

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
    public function update(Request $request)
    {
        Upload::where('id',"=", $request->input('image_id'))->update(array('caption' => $request->input('image_description')));

        return back()->with('success', 'Caption was edited Successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
         // $student = Student::find($id);
        File::delete([public_path($upload->imagePath)]);
        $upload->delete();

        return back()->with('success', 'Image Deleted Successfully');
    }
}
