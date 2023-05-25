<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Divisi;

class Anggota extends Model
{

    protected $table = "anggota";

    function Divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/anggota";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();
        }
    }
    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
