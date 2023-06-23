<?php

namespace App\Http\Controllers\Depan\Informasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventwebController extends Controller
{
    function event(){
        $data['list_event'] = Event::all();
        return view('depan.informasi.event.event',$data);
    }
}
