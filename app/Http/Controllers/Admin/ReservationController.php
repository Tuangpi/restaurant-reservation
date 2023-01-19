<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.Reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::where('status', 'available')->get();
        return view('admin.Reservation.create', compact('tables'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationStoreRequest $request)
    {
        $request_date = Carbon::parse($request->res_date);
        $table = Table::findOrfail($request->table_id);
        foreach($table->reservations as $res){
            $res_date_format = Carbon::parse($res->res_date);
            if($res_date_format->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return 'already reserved';
            }
        }
        if($table->guest_number < $request->guest_number){
            return 'guest number is greater than table guest number';
        }
        Reservation::create([
            'first_name' => $request->first_name, 
            'last_name' => $request->last_name, 
            'email' => $request->email,
            'phone_no' => $request->phone_no, 
            'res_date' => $request->res_date, 
            'table_id' => $request->table_id, 
            'guest_number' => $request->guest_number
        ]);

        return redirect()->route('admin.reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $tables = Table::where('status', 'available')->get();
        return view('admin.Reservation.Edit', compact('reservation', 'tables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrfail($request->table_id);
        if($table->guest_number < $request->guest_number){
            return 'guest number is greater than table guest number';
        }
        $reservation->update($request->validated());
        return redirect()->route('admin.reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservations.index');
    }
}
