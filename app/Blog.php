<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  protected $table = 'blogs';
  protected $fillable = ['userid','name','topic','content','answer','adminAns_Id','status'];
}
