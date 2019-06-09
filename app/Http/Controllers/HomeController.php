<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //load fhe user on the page


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = Auth::user();

        return view('home',compact('user'));

    }

    public function superuser()
    { 
        return view('superuser'); 
    }


    // public function admin(Request $req) {

    // return view(‘middleware’)->withMessage(“Admin”);

    // }

}
