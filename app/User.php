<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable 
{
    use SoftDeletes;
    use Notifiable;
    

    protected $table = 'users';
    public $timestamps = true;



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    protected $fillable = array('name', 'email', 'number_phone', 'brief', 'thumbnail', 'awereded', 'max_poster_allowed', 'is_blocked');

    public function posters()
    {
        return $this->hasMany('App\Poster', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'user_id');
    }


    public function bank_data()
    {
        return $this->hasone('App\Bank_data', 'user_id');
    }

    public function personal_data()
    {
        return $this->hasone('App\Personal_datat', 'user_id');
    }

    public function communication_data()
    {
        return $this->hasone('App\Communication_data', 'user_id');
    }

    

}