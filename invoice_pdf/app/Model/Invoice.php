<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];

    public function reseller(){
        return $this->belongsTo('App\Model\Reseller');
    }
}
