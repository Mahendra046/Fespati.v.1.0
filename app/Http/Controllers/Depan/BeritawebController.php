<?php

namespace App\Http\Controllers\Depan;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritawebController extends Controller
{
    function berita(){
        $data['list_berita'] = Berita::orderBy('id','DESC')->take(6)->get();
        return view('depan.berita.berita',$data);
    }

    function beritadetail($berita){
        $data['recent_berita'] = Berita::orderBy('id','DESC')->take(5)->get();
        $data['berita'] = Berita::find($berita);
        return view('depan.berita.detail_berita',$data);
    }
}
