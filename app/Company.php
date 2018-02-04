<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
  public function tours(){
    return $this->hasMany('App\Tour');
  }

  public function users(){
    return $this->hasMany('App\User');
  }
}
