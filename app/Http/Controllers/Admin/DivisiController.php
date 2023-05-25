<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Models\Anggota;
use Illuminate\Support\Str;

class DivisiController extends Controller
{
    function index()
    {
        $data['list_divisi'] = Divisi::all();
        return view('admin.divisi.index', $data);
    }

    function create()
    {
    }

    function store()
    {
        $divisi = new Divisi;
        $divisi->nama_divisi = request('nama_divisi');
        $divisi->save();
        return back()->with('success', 'Data Berhasil di Tambahkan');
    }

    function show($divisi)
    {
        $data['list_detail'] = Divisi::with('anggota')->find($divisi);
        return view('admin.divisi.show', $data);
    }

    function update(Divisi $divisi)
    {
        $divisi->nama_divisi = request('nama_divisi');
        $divisi->save();
        return redirect('divisi')->with('success', 'Data Berhasil di Edit');
    }


    function infoanggota(Anggota $dataAnggota)
    {
        $data['detail'] = $dataAnggota;
        return view('admin.divisi.anggota.show', $data);
    }

    // function dak jelas
    function deleteanggotaall($list_anggota) {
        $anggota = Anggota::where('id_divisi',$list_anggota)->get();
        $anggota[0]->delete();
        return back()->with('danger','Daanwjjw');
    //     $hapusfoto = $anggota->handleDelete();
    //     $hapus = $anggota->delete();
    //     if ($hapusfoto && $hapus) {
    //         return back()->with('danger','Data Berhasil Di Hapus');
    //     }   return back()->with('warning','Haudah Dak dpat apus akk');
    }
    function deleteanggota(Anggota $dataAnggota){
        $dataAnggota->handleDelete();
        $dataAnggota->delete();
        return back()->with('danger','data Telah dihapus');
    }

    function delete(Divisi $divisi)
    {
        // return $divisi;
        $divisi->delete();
        return back()->with('danger','Data Berhasil dihapus');
        // $anggota = Anggota::where('id_divisi', $id)->get();

        // foreach ($anggota as $key => $value) {
        //     $hapusFoto = $value->handleDelete();
        // }

        // if ($hapusFoto  == 1) {
        //     Anggota::where('id_divisi', $id)->delete();
        //     Divisi::where('id', $id)->delete();
        //     return back()->with('success', 'Data Berhasil Dihapus');
        // }
        // return back()->with('danger', 'Data gagal Dihapus');
    }
}
