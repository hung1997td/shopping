<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LinkProductTag extends Model
{
    protected $fillable = [
        'id','tag_id', 'product_id','created_at','updated_at'
    ];
    protected $table = 'product_tag';
}
