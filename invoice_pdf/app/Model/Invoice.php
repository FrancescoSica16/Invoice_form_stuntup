<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded = [];

    public function resellers(){
        return $this->hasMany('App\Model\Reseller');
    }
}
