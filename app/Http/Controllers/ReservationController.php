<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $datalist=reservation::where('user_id',Auth::id())->get();
        return view('home.user_reservation',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

        $datalist = service::with('service_id')->get();
        return view('home.user_reservation_add',['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data = new Reservation();

        $data->user_id = Auth::id();
        $data = Service::find($id);
        $data->year = $request->input('year');
        $data->month = $request->input('month');
        $data->day = $request->input('day');
        $data->hour = $request->input('hour');
        $data->minute = $request->input('minute');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->status = $request->input('status');

        $data->save();

        return redirect()->route('user_reservations')->with('success','Your Reservation Has been accepted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation,$id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation,$id)
    {
        //
    }
}
