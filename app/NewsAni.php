<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsAni extends Model
{
  protected $table = 'news';
  protected $fillable = ['news_id','admin_id','head_News','act_pic','content','news_type'];
}
