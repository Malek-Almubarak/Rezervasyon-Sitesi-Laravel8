<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $datalist=reservation::all();
        return view('admin.reservations',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation,$id)
    {
        $data=reservation::find($id);
        return view('admin.reservation_edit',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation,$id)
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
    public function update(Request $request, reservation $reservation,$id)
    {
        $data=reservation::find($id);
        $data->note= $request->input('note');
        $data->status=$request->input('status');
        $data->save();
        return back()->with('success','reservations Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation,$id)
    {
        DB::table('reservations')->where('id','=',$id)->delete();
        return redirect()->route('admin_reservation')->with('Success','reservation deleted!');
    }
}
