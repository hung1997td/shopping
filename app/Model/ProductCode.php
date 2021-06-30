<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCode extends Model
{
    protected $fillable = [
        'id', 'code', 'created_at','updated_at'
    ];
    protected $table = 'code';
}
