<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index()
    {
    	// $country = Country::get();
        $accommodations = Accommodation::get();
        return view('admin.dashboard')->with([
            'accommodations' =>  $accommodations,
            // 'country' => $country
        ]);
    }

    public function create()
    {
    	// maak nieuwe vakantie aan

    }
    public function edit()
    {
        // maak nieuwe vakantie aan
        
    }
    public function delete()
    {
        // maak nieuwe vakantie aan
        
    }
}
