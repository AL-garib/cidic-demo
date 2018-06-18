<?php

namespace App;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Bank_data extends Model
{
   public function user(){
       return $this->hasone('App\User');
   }
}
