<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
     'id_hotel', 'name', 'rating', 'address', 'price',
     'photo1', 'photo2', 'photo3', 'photo4', 
     'temperature', 'humidity', 'windspeed'];
}
