<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
        protected $table = 'donations';
        protected $fillable = ['name','sname','email','tel','bank','amount'];
}
