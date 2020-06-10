<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleService extends Model
{
    
    public function shedule()
    {
        return $this->belongsTo('App\Schedule');
    }

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
