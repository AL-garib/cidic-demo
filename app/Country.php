<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model 
{

    protected $table = 'countries';
    public $timestamps = true;
    protected $fillable = array('english_name', 'arabic_name', 'country_code');

    public function cities()
    {
        return $this->hasMany('App\City', 'country_id');
    }

}