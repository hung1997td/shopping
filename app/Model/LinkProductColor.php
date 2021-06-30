<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LinkProductColor extends Model
{
    protected $fillable = [
        'id','color_id', 'product_id','created_at','updated_at'
    ];
    protected $table = 'product_color';
}
