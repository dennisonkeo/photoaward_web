<?php

namespace App\Http\Controllers;

use App\Category;
use App\Upload;
use App\Published;
use Illuminate\Http\Request;
use Auth;
use Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.add_category');
    }

    public function show_publish()
    {
        $categories = Category::all();

        return view('dashboard.publish', compact('categories'));
    }

    public function show_publish_info($category)
    {
        $cat_name = Category::where('name', $category)->first();

        $images = Upload::where('category_id',$cat_name->id)->where('published', 0)->get();

        return view('dashboard.publish_info', compact('images', 'category'));
    }

    public function filter_by_category($category)
    {
        $cat_name = Category::where('name', $category)->first();

        $images = Upload::where('category_id',$cat_name->id)->get();

        return view('stock', compact('images', 'category'));
    }


    public function image_resize($path)
    {
    

            $image = Image::make('uploads/'.$path);

            $image->resize(900,750);

             return $image->response();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_unpublish()
    {
        $images = Published::where('user_id', Auth::user()->id)->get();

        return view('dashboard.unpublish', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload_id = $_POST['upload_id'];

        $check = Upload::where('id', $upload_id)->where('published', 1)->first();

        if(!$check)
        {
            Upload::where('id', $upload_id)
                ->update(array('published' => 1));

            $publish = new Published();
             
                           $publish->upload_id = $upload_id;

                           $publish->user_id = Auth::user()->id;
             
                           $publish->save();

            return response()->json('0');

        }
    }

    public function unpublished(Request $request)
    {
        $upload_id = $_POST['upload_id'];

        $check = Upload::where('id', $upload_id)->where('published', 0)->first();

        if(!$check)
        {
            Upload::where('id', $upload_id)
                ->update(array('published' => 0));

            $publish = Published::where('upload_id', $upload_id)->first();
             
            $publish->delete();

            return response()->json('0');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
