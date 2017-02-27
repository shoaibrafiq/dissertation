<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

  protected $fillable=['title','details','date','image','category_id'];
  
  public function category()
  {
  return $this->belongsTo(Category::class);
  }

}
