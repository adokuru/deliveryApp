<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Models\TrackingLogs;
use Illuminate\Http\Request;

class TrackingLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trackingLogs = TrackingLogs::all();
        return view('trackingLogs.index', compact('trackingLogs'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tracking = Tracking::all();
        return view('trackingLogs.create', compact('tracking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tracking_id' => 'required',
            'description' => 'required',
            'date' => 'required',
            'time' => 'required',
            'status' => 'required',
            'location' => 'required',
        ]);

        $trackingLogs = new TrackingLogs([
            'tracking_id' => $request->get('tracking_id'),
            'description' => $request->get('description'),
            'date' => $request->get('date'),
            'time' => $request->get('time'),
            'status' => $request->get('status'),
            'location' => $request->get('location'),
        ]);

        $trackingLogs->save();

        return redirect('/trackinglogs')->with('success', 'Tracking Logs has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function show(TrackingLogs $trackingLogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackingLogs $trackingLogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackingLogs $trackingLogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackingLogs  $trackingLogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackingLogs $trackingLogs)
    {
        //
    }
}
