<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Position; //load the class of the database table 

use Illuminate\Support\Facades\Auth; //load fhe user on the page

class PositionsController extends Controller

{

	    public function __construct()
    {
        $this->middleware('auth');
    }

 
    	public function index() {


    		$superusers = [


    			'jonasmoeller@gmail.com',

    			'testuser@testuser.com',

    		];


			if(in_array(Auth()->user()->email,$superusers,TRUE) == 1)


				{


				$positions = Position::all();

				$user = Auth::user();


				return view('portfolio', compact('positions'),compact('user'));




    		}

		// public function index() {


		// 	if (Auth()->user()->email == 'jonasmoeller@gmail.com') {


		// 		$positions = Position::all();

		// 		$user = Auth::user();


		// 		return view('portfolio', compact('positions'),compact('user'));

		// 	}

			else {

				$user = Auth::user();

				return view('unauthorized',compact('user'));

			}

	}

}




