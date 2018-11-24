<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
  protected $fillable = [
    'supplier_id','total'
  ];

  // Post pertenece a un usuario
  public function supplier(){
    return $this->belongsTo(Supplier::class);
  }
  //Post tiene y pertenece a muchos tags
  public function items(){
    return $this->belongsToMany(Item::class);
  }
}
