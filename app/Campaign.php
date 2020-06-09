<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'business_id', 'start_date', "end_date"
    ];
}
