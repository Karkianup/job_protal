<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_has_permission');
    }

    public function user()
    {
        return $this->belongsToMany(User::class,'user_has_permission');
    }
}