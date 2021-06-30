<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at','updated_at','parent_id','status','slug'
    ];
    protected $table = 'categories';
    public function categoryChildrent()
    {
        return $this->hasMany(ProductCategory::class,'parent_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }

}
