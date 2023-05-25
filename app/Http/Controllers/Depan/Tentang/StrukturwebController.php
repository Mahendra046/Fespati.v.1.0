<?php

namespace App\Http\Controllers\Depan\Tentang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Divisi;
use App\Models\Anggota;

class StrukturwebController extends Controller
{
    function struktur_organisasi() {
        $data['periode'] = Profil::where('jenis','Periode')->get();

        $data['list_divisi'] = Divisi::with('anggota')->get();
        $data['list_anggota'] = Anggota::all();
        return view('depan.tentang.struktur_organisasi',$data);
    }
}
