<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'address', "coordinates","phone","whatsapp","description","website"
    ];
}
