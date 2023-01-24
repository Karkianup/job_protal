<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory;

    protected $guarded=[];
    public function permission()
    {
        return $this->belongsToMany(Permission::class,'role_has_permission');
    }

    public function user()
    {
        return $this->belongsToMany(User::class,'user_has_role');
    }

    public function setSlugAttribute($value)
    {
        if(Static::where('slug',Str::slug($value.'-'))->exists()){
            $this->attributes['slug']= Str::slug($value,'-').'-'.rand(1,99999);
        }else{
            $this->attributes['slug']=  Str::slug($value,'-');
        }
    }
}
