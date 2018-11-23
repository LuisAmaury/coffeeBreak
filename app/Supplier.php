<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  protected $fillable = [
    'name','phone','address','cardNumber'
  ]

  public function items(){
    return $this->hasMany(Item::class);
  }

  public function buys(){
    return $this->hasMany(Buy::class);
  }
}
