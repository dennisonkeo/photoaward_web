<?php

namespace App\Http\Controllers;

use App\JudgeRating;
use App\RatingScale;
use App\Category;
use App\Upload;
use App\User;
use Auth;
use Illuminate\Http\Request;

class JudgeRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.add_jury');
    }

    public function manageJury()
    {
        $judges = User::all();
        
        return view('dashboard.manage_jury', compact('judges'));
    }   

    public function manageRating()
    {
        $scales = RatingScale::all();

        return view('dashboard.manage_rating', compact('scales'));
    }

    public function addScale(Request $request)
    {

            $scale = new RatingScale();

              $scale->name = $request->input("name");

              $scale->save();

             return back()->with('success', 'Scale added successfully.'); 
    } 

    public function show_rating()
    {
        $categories = Category::all();

        return view('dashboard.rating', compact('categories'));
    }

    public function show_rating_info($category)
    {
        $cat_name = Category::where('name', $category)->first();

        $scales = RatingScale::all();

        $count = 1;

        $images = Upload::where('category_id',$cat_name->id)->where('published', 1)->get();

        return view('dashboard.rating_info', compact('images', 'category', 'scales', 'count'));
    }

    public function rated_images()
    {
        // $cat_name = Category::where('name', $category)->first();

        $scales = RatingScale::all();

        $count = 1;

        $images = JudgeRating::where('user_id',Auth::user()->id)->groupBy('upload_id')->get();

        return view('dashboard.rated_images', compact('images'));
    }

    public function rated_images_info($category)
    {
        $cat_name = Category::where('name', $category)->first();

        $images = JudgeRatingController::where('user_id', Auth::user()->id)
                                    ->upload('category_id',$cat_name->id)
                                    ->groupBy('upload_id')
                                    ->get();

        return view('dashboard.rated_info', compact('images', 'category'));
    }

    public function rate_image(Request $request)
    {
        $creativity = $_POST['Creativity'];
        $uniqueness = $_POST['Uniqueness'];
        $original = $_POST['Orininality'];

        $check = Upload::where('id', $upload_id)->where('published', 1)->where('published', 1)->first();

        if(!$check)
        {

            $publish = new Published();
             
                           $publish->upload_id = $upload_id;

                           $publish->user_id = Auth::user()->id;
             
                           $publish->save();

            return response()->json('0');

        }
    }

    public function display_rating()
    {
        return view('dashboard.image_rating');
    }

    public function addRating(Request $request)
    {
        $variables = $request->input('variable');
        $scores = $request->input('scores');
        $imageId = $request->input('image_id');

         for($i=0; $i<(count($variables)); $i++)
         {
            // echo $variables[$i].": ".$scores[$i];

            $rating_id = RatingScale::where('name', $variables[$i])->first();

            $checkRating = JudgeRating::where('user_id', Auth::user()->id)
                        ->where('upload_id', $imageId)
                        ->where('rating_scale_id', $rating_id->id)
                        ->first();
            if(!$checkRating)
            {
                 $rate = new JudgeRating();
             
                        $rate->rating_scale_id = $rating_id->id;

                        $rate->upload_id = $imageId;

                        $rate->rate = $scores[$i];

                        $rate->user_id = Auth::user()->id;
             
                        $rate->save();
            }
 
         }
        return response()->json('0');

    }

    public function getScale(Request $request)
    {
        $data = RatingScale::where('id', $request->post('id'))->first();

        return response()->json($data);
    }

    public function updateScale(Request $request)
    {
        RatingScale::where('id', $request->post('id'))
                                ->update(array('name' => $request->post('name')));

        return response()->json('0');
    }

    public function deleteScale(RatingScale $scale)
    {
        $scale->delete();

        return response()->json('0');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JudgeRating  $judgeRating
     * @return \Illuminate\Http\Response
     */
    public function show(JudgeRating $judgeRating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JudgeRating  $judgeRating
     * @return \Illuminate\Http\Response
     */
    public function edit(JudgeRating $judgeRating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JudgeRating  $judgeRating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JudgeRating $judgeRating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JudgeRating  $judgeRating
     * @return \Illuminate\Http\Response
     */
    public function destroy(JudgeRating $judgeRating)
    {
        //
    }
}
