<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  protected $fillable =[
'comment',
'post_id'

  ];

  public function post()
  {
   return $this->belongsto(post::class);
  }

  public function user()
  {
  
  }
}
