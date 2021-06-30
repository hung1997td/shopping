<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at','updated_at','parent_id','status','slug','logo'
    ];
    protected $table = 'brands';
}
