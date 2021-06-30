<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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
    protected $table = 'users';
    public function verifyUser(){
        return $this->hasOne(VerifyUser::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function roles(){
        return $this->belongsToMany(Roles::class, 'user_roles', 'user_id');
    }

    public function checkPermissionAccess($permissionCheck){
        $roles = auth()->user()->roles;
        foreach ($roles as $role){
            $permissions = $role->permissions;
            if($permissions->contains('code', $permissionCheck)){
                return true;
            }
        }
        return false;
    }
}
