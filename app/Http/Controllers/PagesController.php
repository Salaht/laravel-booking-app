<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Country;

use App\Accommodation;

class PagesController extends Controller
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

    public function index(){

        $countries = Country::pluck('name', 'id');
        $accommodations = Accommodation::pluck('name', 'id');
    	return view('home', compact('countries','accommodations'));

    }
}
