<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vege extends Model
{
    protected $table = 'vege_house'; //untuk konek ke table tp ga perlu karena namanya sama

    protected $casts = [        // membuat json string
         'bonus' => 'array'
     ];
    
}
