<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table='users';
     protected $fillable = [
       'name', 'email', 'password','phone','address','gender','role','company_id'
     ];
     protected $users = [
      'role' => 'boolean'
     ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function orders(){
      return $this->hasMany('App\Order');
    }
    public function articles(){
      return $this->hasMany('App\Article');
    }
    public function company(){
      return $this->belongsTo('App\Company');
    }
}
