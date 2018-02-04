<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
  protected $table='order_details';
  protected $fillable = ['name','quantity','total_price','tour_id','order_id'];
  protected $dates = ['deleted_at'];

  public function tours(){
    return $this->belongsToMany('App\Tour');
  }
  public function order(){
    return $this->belongsTo('App\Order');
  }
}
