<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prod extends Model
{
   protected $table = 'products';

   public $primarykey = 'id';
   public $timestamps = true;

}
