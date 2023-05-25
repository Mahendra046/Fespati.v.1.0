<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function loginProcess(){
        if (Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])) {

            return redirect('admin/dashboard')->with('success', 'Login Berhasil');
        }
        return back()->with('danger', 'Login Gagal');
    }

    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('login')->with('warning','Anda Telah Keluar');
    }
}
