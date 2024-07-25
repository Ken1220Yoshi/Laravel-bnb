<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

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
        $checkin = new DateTime($request->checkin);
        $checkout = new DateTime($request->checkout);
        $interval = $checkin->diff($checkout);
        $days = $interval->days;
        $total_price = $request->price * $request->guests * $days;

        $this->reservation->user_id = Auth::id();
        $this->reservation->post_id = $request->post_id;
        $this->reservation->check_in_date = $request->checkin;
        $this->reservation->check_out_date = $request->checkout;
        $this->reservation->guests = $request->guests;
        $this->reservation->price = $total_price;
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

    public function comfirm(Request $request)
    {
        $post = Post::findOrFail($request->post_id);

        return view('post.reservation.edit')->with('reservation',$request)
                        ->with('post',$post);
    }
}
