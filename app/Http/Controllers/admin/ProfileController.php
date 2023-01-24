<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\OldPasswordRule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }
    public function securitySetting()
    {
        return view('admin.profile.security-setting');
    }

    public function passwordEdit()
    {
        return view('admin.profile.password');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            "old_password"=>[new OldPasswordRule],
            'password' => ['required', 'string', 'min:8','different:old_password'],
            'confirm_password'=>['same:password'],
        ],[
            'password.different'=>'Old and New Password must be different',
        ]);

        $user=User::find(Auth::id());
        $user->password=bcrypt($request->password);
        $user->update();

        return redirect()->route('admin.securitySetting')->withMessage('Successfully updated password');
    }
}
