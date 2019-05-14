<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['apartment_id', 'title', 'contact','number_of_people','starts_at', 'ends_at','color'];
}
