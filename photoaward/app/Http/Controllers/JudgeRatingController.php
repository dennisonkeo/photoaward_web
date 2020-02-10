<?php

namespace App\Http\Controllers;

use App\JudgeRating;
use App\RatingScale;
use App\Category;
use App\Upload;
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
        return view('dashboard.manage_jury');
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

        $images = Upload::where('category_id',$cat_name->id)->where('published', 1)->get();

        return view('dashboard.rating_info', compact('images', 'category', 'scales'));
    }

    public function display_rating()
    {
        return view('dashboard.image_rating');
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
