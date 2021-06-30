<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogTag extends Model
{
    protected $fillable = [
        'id', 'name','slug',  'created_at','updated_at'
    ];
    protected $table = 'blog_tags';
}
