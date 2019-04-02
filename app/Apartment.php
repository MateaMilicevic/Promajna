<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $guarded = ['id'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function AddReservation($data)
    {
        $this->reservations()->create(compact('data'));
    }
}
