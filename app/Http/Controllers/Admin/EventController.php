<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index() {
        $data['list_event'] = Event::all();
        return view('admin.event.index', $data);
    }

    function store() {
        $event = new Event;
        $event->nama_event = Request('nama_event');
        $event->link = Request('link');
        $event->handleUploadFoto();
        $event->save();

        return redirect('event')->with('success','Event Berhasil diTambahkan');
    }

    function update(Event $event) {
        $event->nama_event = Request('nama_event');
        $event->link = Request('link');
        if (request('foto')) $event->handleUploadFoto();
        $event->save();

        return back()->with('warning','Event Berhasil di Ubah');
    }

    function destroy(Event $event) {
        $event->handleDelete();
        $event->delete();
        return back()->with('danger','Event Telah dihapus');
    }

}
