<?php

namespace App\Http\Controllers;

use App\Upload;
use App\Category;
use App\ImagePay;
use App\Vote;
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

    public function stock()
    {

        $images = Upload::latest()->get();

        return view('stock', compact('images'));
    }

    public function stock_view(Upload $upload)
    {

        return view('stock-view', compact('upload'));
    }

    public function stock_view_image(Upload $upload)
    {
        $images = Upload::latest()->get();

        return view('landing_info', compact('upload', 'images'));
    }

    public function test()
    {
        dd("it worked!");
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
    public function display_like()
    {
        // $first = Upload::where('user_id',Auth::user()->id)->latest()->first();

        $images = Upload::where('uploaded',"yes")->latest()->get();

        $count = Upload::where('uploaded',"yes")->count();

        if($count >0)

        {

                    $modulus = $count%4;

                    $constant = ($count-$modulus)/4;

                    $group_1;
                    $group_2;
                    $group_3;
                    $group_4 = $constant;

                    if($modulus < 2)
                    {
                        $group_1 = $constant+$modulus;
                        $group_2 = $constant;
                        $group_3 = $constant;
                    }
                    else if($modulus  == 2)
                    {
                        $group_1 = $constant+1;
                        $group_2 = $constant+1;
                        $group_3 = $constant;
                    }
                    else if($modulus  == 3)
                    {
                        $group_1 = $constant+1;
                        $group_2 = $constant+1;
                        $group_3 = $constant+1;
                    }

                    $images_1 = Upload::where('uploaded','yes')->latest()->take($group_1)->get();

                    $array_1 = array();
                    
                    foreach($images_1 as $image)
                    {
                        $array_1[] = $image->id;
                                   
                    }

                    $last_1 = array_pop($array_1);

                    $images_2 = Upload::where('uploaded','yes')->where('id',"<",$last_1)->latest()->take($group_2)->get();

                     $array_2 = array();
                    
                    foreach($images_2 as $image)
                    {
                        $array_2[] = $image->id;
                                   
                    }

                    $last_2 = array_pop($array_2);

                    $images_3 = Upload::where('uploaded','yes')->where('id',"<",$last_2)->latest()->take($group_3)->get();

                     $array_3 = array();
                    
                    foreach($images_3 as $image)
                    {
                        $array_3[] = $image->id;
                                   
                    }

                    $last_3 = array_pop($array_3);


                    $images_4 = Upload::where('uploaded','yes')->where('id',"<",$last_3)->latest()->take($group_4)->get();

                        // dd($images_4);


                    return view('like_image', compact('images_1','images_2','images_3','images_4', 'images'));
            }

            else
            {
                return view('like_image', compact('images'));
            }
    }

    public function buy_image()
    {
      return view('buy_image');
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
              $upload->device = "";
              $upload->uploaded = "no";
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
    public function save_upload()
    {

        // $this->test();
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

        $verifytoken = ImagePay::where('token',"=",session()->getId())->first();

                        $upload = new ImagePay();
             
                           $upload->amount = $total_amount;
                           $upload->token = session()->getId();
                           $upload->total_images = count($imagesgroup);
                           $upload->user_id = Auth::user()->id;
             
                           $upload->save();
             
                        Upload::where('token',"=", session()->getId())
                                ->where('uploaded','no')
                                ->update(array('uploaded' => 'yes'));

                        return response()->json('0');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function add_like()
    {
        $upload_id = $_POST['upload_id'];

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

                        return response()->json($get_likes);
            }
            else
            {
              $get_likes = Vote::where('upload_id', $upload_id)->count();


                // echo $get_likes;

                        return response()->json($get_likes);
            }
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
        Upload::where('id',"=", $request->input('image_id'))->update(array('caption' => $request->input('image_description'),'device' => $request->input('device')));

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
