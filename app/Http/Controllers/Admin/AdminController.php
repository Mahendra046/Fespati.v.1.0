<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data['list_admin'] = Admin::all();
        return view('admin.admin.index',$data);
    }
    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
        $massage = [
            'required' => ':attribute Wajib diIsi'
        ];
        $this->validate($request, $rules, $massage);

        $admin = new Admin;
        $admin->nama = request('nama');
        $admin->email = request('email');
        $admin->level = request('level');
        $admin->no_hp = request('no_hp');
        $admin->password = bcrypt(request('password'));
        $admin->save();

        return back()->with('success','admin Berhasil Ditambahkan');
    }
}
