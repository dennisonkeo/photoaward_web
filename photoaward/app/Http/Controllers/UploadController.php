<?php

namespace App\Http\Controllers;

use App\Upload;
use App\Category;
use App\ImagePay;
use App\Vote;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Image;

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

    public function entries($track)
    {

      $categories = Category::all();

      return view('entries', compact('categories', 'track'));
    }

    public function stock()
    {

        $images = Upload::latest()->get();

        $categories = Category::all();

        $category = '';

        return view('stocktest', compact('images', 'category', 'categories'));
    }

    public function discover()
    {

        $images = Upload::latest()->get();

        $categories = Category::all();

        $category = '';

        return view('discovery', compact('images', 'category', 'categories'));
    }

    public function stock_view(Upload $upload)
    {

        return view('stock-view', compact('upload'));
    }

    public function stock_view_image(Upload $upload)
    {
        $images = Upload::latest()->get();

        $image = Upload::where('id', $upload->id)->first();

        $author = Upload::where('user_id',$image->user_id)->get();

        $category = Upload::where('category_id',$image->category_id)->get();

        return view('landing_info', compact('upload', 'images', 'author', 'category'));
    }

    public function getCatImage($category)
    {
        $cat = Category::where('name',$category)->first();


        return view('stockcat', compact('cat'));
    }

    public function stockImageInfo($imageId)
    {
        $image = Upload::where('id', $imageId)->first();

        $authorImages = Upload::where('user_id', $image->user_id)->get();

        $catImages = Upload::where('category_id', $image->category_id)->get();

        return view('stockinfo', compact('image', 'authorImages', 'catImages'));
    }

    public function view_cart()
    {
        $images = Upload::where('user_id', Auth::user()->id)->where('uploaded','no')->get();

        $imagesgroup = Upload::where('user_id', Auth::user()->id)->where('uploaded','no')->get();

        $total_amount = 0;

        $total = 0;

        foreach($imagesgroup as $image)
        {
              if($image->track == "Professionals")
              {
                $total_amount += 200;
              }
              else
              {
                $total_amount += 100;
              }
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

        $authors = User::all();

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


                    return view('like_image', compact('images_1','images_2','images_3','images_4', 'images', 'authors'));
            }

            else
            {
                return view('like_image', compact('images', 'authors'));
            }
    }

    public function photo_by_author($author)
    {
        $authors = User::all();
        $user_id = User::where('name',$author)->first();

        $images = Upload::where('user_id',$user_id->id)->get();
        // dd($images);
        return view('like_image', compact('images', 'authors'));
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

              $originalImage= $request->file('file');
              // $thumbnailImage = Image::make($originalImage);
              // $thumbnailPath = public_path().'/thumbnails/';
              // // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
              // // $thumbnailImage->resize(150,150);
              // $img->insert(public_path('images/logo.png'), 'bottom-right', 10, 10);
              // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());


              


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
        $images = Upload::where('user_id', Auth::user()->id)->where('uploaded','no')->get();

        $imagesgroup = Upload::where('user_id', Auth::user()->id)->where('uploaded','no')->get();

        $total_amount = 0;

        $total = 0;

        foreach($imagesgroup->groupby('category_id') as $image)
        {
            foreach($image as $img)
            {
              if($img->track == "Professionals")
              {
                $total = count($image)*200;
                break; 
              }
              else
              {
                  $total = count($image)*100;
                  break; 
              }
                
            }

              $total_amount += $total;
        }
        

        $verifytoken = ImagePay::where('user_id', Auth::user()->id)->first();

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
