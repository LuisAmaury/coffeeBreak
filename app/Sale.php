<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  protected $fillable = [
    'user_id', 'total'
  ]

  // Post pertenece a un usuario
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function (){
    return $this->belongsToMany(Product::class);
  }
}
