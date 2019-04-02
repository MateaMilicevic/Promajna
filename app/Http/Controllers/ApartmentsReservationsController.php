<?php

namespace App\Http\Controllers;

use App\ApartmentReservations;
use Illuminate\Http\Request;
use App\Apartment;
use App\Reservation;

class ApartmentsReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Apartment $apartment)
    {

        Reservation::create([

        'apartment_id' => $apartment->id,
        'starts_at' => request('starts_at'),
        'ends_at' => request('ends_at')
        ]);
        // $apartment->AddReservation(request(['starts_at', 'ends_at']));

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ApartmentReservations  $apartmentReservations
     * @return \Illuminate\Http\Response
     */
    public function show(ApartmentReservations $apartmentReservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApartmentReservations  $apartmentReservations
     * @return \Illuminate\Http\Response
     */
    public function edit(ApartmentReservations $apartmentReservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApartmentReservations  $apartmentReservations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApartmentReservations $apartmentReservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApartmentReservations  $apartmentReservations
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApartmentReservations $apartmentReservations)
    {
        //
    }
}
