<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $r){
        if(Auth::attempt($r->only('email','password'))){
            $user = Auth::user();
            // Lấy user
            $role = $user->roles->first()->name;

            // Chuyển hướng theo vai trò
            if($role=='admin') return redirect('/admin');
            if($role=='monitor') return redirect('/monitor');
            return redirect('/student');
        }
        return back()->with('error','Sai tài khoản');
    }
}
