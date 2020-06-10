<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'date_schedule', 'cost', "notes","status","client_id","user_id"
    ];

    public function services()
    {
        return $this->hasMany('App\ScheduleService');
    }
}
