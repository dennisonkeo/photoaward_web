<?php

namespace App\Http\Controllers;

use App\JudgeRating;
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
