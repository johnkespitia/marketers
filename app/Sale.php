<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sale_date', 'cost_sale', 'contact_id'
    ];

    public function services()
    {
        return $this->hasMany('App\SaleService');
    }
}
