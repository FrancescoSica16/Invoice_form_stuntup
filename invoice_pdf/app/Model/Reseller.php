<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    protected $fillable = ['reseller_name'];
    
    public function invoice(){
        return $this->hasMany('App\Models\Invoice');
    }
}
