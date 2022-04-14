<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tracking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 

        $tracking = new Tracking();
        $tracking->title = $request->name;
        $tracking->tracking_id = $request->email;
        $tracking->from_address = $request->phone;
        $tracking->to_address = $request->phone;
        $tracking->address = $request->address;
        $tracking->city = $request->city;
        $tracking->state = $request->state;
        $tracking->zip = $request->zip;
        $tracking->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $tracked = Tracking::where('tracking_id', $request->tracking_id)->with('Trackinglogs')->first();
        if ($tracked) {
            return view('tracker', compact('tracked'));
        } else {
            return redirect()->back()->with('error', 'Tracking ID not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function edit(Tracking $tracking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tracking $tracking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tracking $tracking)
    {
        //
    }

    public function admin_dashboard()
    {
        //
        $trackings = Tracking::all();
        return view('dashboard', compact('trackings'));
    }
    public function view_show($id)
    {
        //
        $trackings = Tracking::find($id);
        return view('dashboard', compact('trackings'));
    }
}
