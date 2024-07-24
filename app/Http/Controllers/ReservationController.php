<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    private $reservation;

    public function __construct(Reservation $reservation){
        $this->reservation = $reservation;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->reservation->user_id = Auth::id();
        $this->reservation->post_id = $request->post_id;
        $this->reservation->check_in_date = $request->checkin;
        $this->reservation->check_out_date = $request->checkout;
        $this->reservation->guests = $request->guests;
        $this->reservation->price = $request->price;
        $this->reservation->save();


        return redirect()->route('home');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
