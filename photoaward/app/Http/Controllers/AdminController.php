<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\Payment;
use App\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        // dd(Carbon::SATURDAY);
        $uploads = Upload::where('uploaded','yes')->get();
        $payments = Payment::take(5)->latest()->get();
        $contestants = User::all();
        $today = Payment::where('created_at',  Carbon::today())->sum('amount');
        $week = Payment::where('created_at','>', Carbon::now()->startOfWeek())->where('created_at', '<', Carbon::now()->endOfWeek())->sum('amount');
        $month = Payment::whereMonth('created_at',  Carbon::now()->month)->sum('amount');

        $total = Payment::all()->sum('amount');

    	return view('dashboard.index', compact('uploads', 'payments', 'contestants', 'today', 'week', 'month', 'total'));
    }

    public function index()
    {
    	return view('dashboard.add_admin');
    }

    public function manageAdmin()
    {
    	return view('dashboard.manage_admin');
    }
}
