<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communication_data extends Model
{
    public function user(){
        return $this->hasone('App\User');
    }
}
