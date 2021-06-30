<?php

namespace App\Model;

use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
