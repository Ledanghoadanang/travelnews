<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
  protected $table='tours';
  protected $fillable = ['name','time','departure','destination','description','details','price','child_price','baby_price','image','company_id'];
  protected $dates = ['deleted_at'];

  public function company(){
    return $this->belongsTo('App\Company');
  }

  public function order_details(){
    return $this->belongsToMany('App\OrderDetail');
  }
}
