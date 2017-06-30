<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Holiday;
use App\Country;
use App\Accommodation;

class VakantieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holiday::with('Accommodation', 'Country')->get();

        $accommodations = Accommodation::get();
        $countries = Country::get();

        return view('admin.holiday')->with([
            'holidays' => $holidays,
            'accommodations' => $accommodations,
            'countries' => $countries
        ]);
    }
    public function create()
    {
        // return view('holiday.create');

    }

    public function store(Request $request)
    {
        // dd($request);
        $holiday = new Holiday;
        $holiday->name = $request->name;
        $holiday->description = $request->description;
        $holiday->decimal = $request->decimal;
        $holiday->country_id = $request->country_id;
        $holiday->accommodation_id = $request->accommodation_id;
        $holiday->save();
        $holidays = Holiday::with('Accommodation', 'Country')->findOrFail($holiday->id);
        return response()->json($holidays);
    }

    public function show($id)
    {
        $holidays = Holiday::whereId($id)->first();
        return view('vakantie.show')->with('holidays', $holidays);
    }

    public function edit($id)
    {
        $holidays = Holiday::with('Accommodation', 'Country')->findOrFail($id);
        return response()->json($holidays);
    }

    public function update(Request $request, $id)
    {
        $holiday = Holiday::whereId($id)->first();
        $holiday->name = $request->name;
        $holiday->description = $request->description;
        $holiday->decimal = $request->decimal;
        $holiday->country_id = $request->country_id;
        $holiday->accommodation_id = $request->accommodation_id;
        $holiday->update();

        $holidays = Holiday::with('Accommodation', 'Country')->findOrFail($holiday->id);
        return response()->json($holidays);
    }

    public function destroy($id)
    {
        $holiday = Holiday::findOrFail($id);
        $holiday->delete();
    }

    public function overview(Request $request)
    {
        $country = Country::findOrFail($request->country);
        $holidays = Holiday::where('country_id', 
            $request->country)->where('accommodation_id', $request->accommodation)->get();
        
        return view('vakantie.index')->with([
            'holidays' =>  $holidays,
            'country' => $country
        ]);

    }
    public function makeReservation()
    {
        
    }
}
