<?php

namespace App\Observers;

use App\Models\Permission;
use Illuminate\Support\Str;

class PermissionObserver
{

    public function creating(Permission $permission)
    {
        $permission->slug=Str::slug($permission->slug);
    }

    public function updating(Permission $permission)
    {
        $permission->slug=Str::slug($permission->slug);
    }


}
