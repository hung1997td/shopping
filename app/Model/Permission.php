<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at','updated_at','parent_id','code'
    ];
    protected $table = 'permissions';
    public function roles(){
        return $this->belongsToMany(Roles::class, 'permissions_roles', 'permission_id');
    }

    public function permissionChildren(){
        return $this->hasMany(Permission::class, 'parent_id');
    }
}
