<?php

namespace App\Http\Controllers;

use App\ApartmentReservations;
use Illuminate\Http\Request;
use App\Apartment;
use App\Reservation;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

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
    public function create(Apartment $apartment)
    {
        return view('/reservation.create', compact('apartment'));
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
        'title'=>request('title'),
        'contact'=>request('contact'),
        'number_of_people'=>request('number_of_people'),
        'starts_at' => request('starts_at'),
        'ends_at' => request('ends_at'),
        'color' => request('color'),
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
    public function show(Apartment $apartment)
    {
        $reservations = Reservation::where('apartment_id', $apartment->id)->get();
        return view('reservation.show', compact('reservations', 'apartment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApartmentReservations  $apartmentReservations
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $apartment = Apartment::where('id', $reservation->apartment_id)->first();

        return view('reservation.edit', compact('apartment', 'reservation'));
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

    public function calender(Apartment $apartment)
            {
                $events = [];
                $data = Reservation::where('apartment_id', $apartment->id)->get();
                if($data->count())
                 {
                    foreach ($data as $key => $value)
                    {
                        $events[] = Calendar::event(
                            $value->title,
                            true,
                            new \DateTime($value->starts_at),
                            new \DateTime($value->ends_at.'+1 day'),
                            null,

                         [
                             'color' => $value->color,

                             'contentheight' => 100

                         ]

                        );
                    }
                }
                $calendar = Calendar::addEvents($events)->setCallbacks([
                    'height' => 400,
                    'width' => 400

                        ]);
                return view('/apartments.show', compact('calendar', 'apartment'));
            }
}
