<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    protected $fillable = [
        'id', 'name','color_code', 'created_at','updated_at'
    ];
    protected $table = 'colors';
}
