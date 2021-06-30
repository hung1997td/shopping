<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'id','path', 'product_id','created_at','updated_at'
    ];
    protected $table = 'images';

}
