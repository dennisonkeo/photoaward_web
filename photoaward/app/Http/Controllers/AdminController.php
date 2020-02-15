<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\Payment;
use App\User;
use App\Role;
use Carbon\Carbon;
use Mail;
use App\Mail\JuryMail;
use Illuminate\Support\Facades\Hash;

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

    public function addJury(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>['required', 'string', 'max:13','regex:/(2547)[0-9]{8}/'],
            'email'=>'required|string|email|max:255|unique:users',

            ]);
        $passs = str_random(6);
          $user = new User();
          $user->name = $request->input("name");
          $user->email = $request->input("email");
          $user->phone = $request->input("phone");
          $user->password = Hash::make($passs);       
          $user->save();
          $user->roles()->attach(Role::where('name', 'judge')->first());

        Mail::to($user->email)->send(new JuryMail($user,$passs));

           return back()->with('success', 'User added successfully.');   
    }
}
