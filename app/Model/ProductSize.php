<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at','updated_at'
    ];
    protected $table = 'sizes';
}
