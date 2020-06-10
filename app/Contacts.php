<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subject', 'message', 'type', "campaign_id","chanel_id","notes","client_id","type_id","user_id"
    ];

    public function campaign()
    {
        return $this->belongsTo('App\Campaign');
    }

    public function chanel()
    {
        return $this->belongsTo('App\Chanel');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function typex()
    {
        return $this->belongsTo('App\Type');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
