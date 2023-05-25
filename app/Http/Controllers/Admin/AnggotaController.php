<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Divisi;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['list_anggota'] = Anggota::all();
        $data['list_divisi'] = Divisi::all();
        // return $data;
        return view('admin.anggota.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $anggota = new Anggota;
        $anggota->id_divisi = Request('id_divisi');
        $anggota->nama = Request('nama');
        $anggota->jenis_kelamin = Request('jenis_kelamin');
        $anggota->jabatan = Request('jabatan');
        $anggota->email = Request('email');
        $anggota->handleUploadFoto();
        $anggota->save();

        return back()->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($anggota)
    {
        $data['detail'] = Anggota::find($anggota);
        return view('admin.anggota.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Anggota $anggota)
    {
        $anggota->id_divisi = Request('id_divisi');
        $anggota->nama = Request('nama');
        $anggota->jenis_kelamin = Request('jenis_kelamin');
        $anggota->jabatan = Request('jabatan');
        $anggota->email = Request('email');
        $anggota->save();
        if (request ('foto')) $anggota->handleUploadFoto();
        // return $anggota;

        return back()->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Anggota $anggota)
    {
        // return $anggota;
        $anggota->handleDelete();
        $anggota->delete();
        return back()->with('success', 'data berhasil dihapus');
    }
}
