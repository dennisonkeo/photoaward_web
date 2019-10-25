<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('dashboard.add_admin');
    }

    public function manageAdmin()
    {
    	return view('dashboard.manage_admin');
    }
}
