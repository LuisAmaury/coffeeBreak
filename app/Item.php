<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = [
    'name','unitType','category_id','supplier_id','price','stock'
  ]

  // Post pertenece a un usuario
  public function user(){
    return $this->belongsTo(Supplier::class);
  }

  public function category(){
    return $this->belongsTo(Category::class);
  }
  //Post tiene y pertenece a muchos tags
  public function products(){
    return $this->belongsToMany(Product::class);
  }

  public function buys(){
    return $this->belongsToMany(Buy::class);
  }
}
