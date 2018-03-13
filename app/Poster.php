<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poster extends Model 
{

    protected $table = 'posters';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = [
        'deleted_at',
        'expired_at'
    ];
    protected $fillable = [
        
        'poster_title', 'content', 
        'expired_at', 'is_confimed', 
        'latitude', 'longitude'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function photos()
    {
        return $this->hasMany('App\Photo', 'poster_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'poster_id');
    }

}