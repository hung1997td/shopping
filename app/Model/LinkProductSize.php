<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LinkProductSize extends Model
{
    protected $fillable = [
        'id','size_id', 'product_id','created_at','updated_at'
    ];
    protected $table = 'product_size';
}
