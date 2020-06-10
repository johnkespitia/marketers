<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleService extends Model
{
    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
