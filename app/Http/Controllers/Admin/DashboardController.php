<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Divisi;
use App\Models\Anggota;
use App\Models\Berita;
use App\Models\Event;
use App\Models\Galeri;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $data ['list_divisi'] = Divisi::all();
        $data ['list_anggota'] = Anggota::all();
        $data ['list_berita'] = Berita::all();
        $data ['list_event'] = Event::all();
        $data ['list_galeri'] = Galeri::all();

        return view('admin.dashboard.index',$data);
    }
}
