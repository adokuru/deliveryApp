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
        $tracking->tracking_id = $request->tracking_id;
        $tracking->from_phone = $request->from_phone;
        $tracking->to_phone = $request->to_phone;
        $tracking->to_address = $request->to_address;
        $tracking->from_address = $request->from_address;
        $tracking->to_city = $request->Destination_city;
        $tracking->to_state = $request->Destination_state;
        $tracking->to_country = $request->destination_country;
        $tracking->step = $request->step;
        $tracking->status = $request->status;
        $tracking->expected_delivery_date = $request->e_Delivery;
        $tracking->delivery_date = $request->e_Delivery;
        $tracking->save();

        return redirect()->route('dashboard');
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
    public function edit($id)
    {

        $tracking = Tracking::where('id', $id)->with('Trackinglogs')->first();
        return view('edit', compact('tracking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $tracking = Tracking::where('id', $request->id)->first();
        $tracking->title = $request->name;
        $tracking->tracking_id = $request->tracking_id;
        $tracking->from_phone = $request->from_phone;
        $tracking->to_phone = $request->to_phone;
        $tracking->to_address = $request->to_address;
        $tracking->from_address = $request->from_address;
        $tracking->to_city = $request->Destination_city;
        $tracking->to_state = $request->Destination_state;
        $tracking->to_country = $request->destination_country;
        $tracking->step = $request->step;
        $tracking->status = $request->status;
        $tracking->expected_delivery_date = $request->e_Delivery;
        $tracking->delivery_date = $request->e_Delivery;
        $tracking->save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tracking  $tracking
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $tracking = Tracking::where('id', $id)->delete();
        return redirect()->route('dashboard');
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
