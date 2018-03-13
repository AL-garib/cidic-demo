<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model 
{

    protected $table = 'cities';
    public $timestamps = true;
    protected $fillable = array('city_name');

    public function posters()
    {
        return $this->hasMany('App\Poster', 'city_id');
    }

}