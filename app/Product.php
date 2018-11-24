<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name','description','price','slug'
  ];

  public function items(){
    return $this->belongsToMany(Item::class);
  }

  public function sales(){
    return $this->belongsToMany(Sale::class);
  }
}
