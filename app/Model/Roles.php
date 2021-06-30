<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at','updated_at','code'
    ];
    protected $table = 'roles';
    public function users(){
        return $this->belongsToMany(User::class, 'user_roles', 'role_id');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class, 'permissions_roles', 'role_id');
    }
}
