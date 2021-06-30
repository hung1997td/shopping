<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Product extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'regular_price','created_at','updated_at', 'sale','images','image_id','category_id','description','star'
    ];
    protected $table = 'products';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
    public function brand()
    {
        return $this->belongsTo(ProductBrand::class);
    }
    public function codes()
    {
        return $this->belongsTo(ProductCode::class);
    }
    public function images()
    {
        return $this->hasMany(Images::class,'product_id');
    }
    public function sizes()
    {
        return $this->belongsToMany(ProductSize::class, 'product_size', 'product_id', 'size_id');
    }
    public function colors()
    {
        return $this->belongsToMany(ProductColor::class, 'product_color', 'product_id', 'color_id');
    }
    public function tags()
    {
        return $this->belongsToMany(ProductTag::class, 'product_tag', 'product_id', 'tag_id');
    }
}
