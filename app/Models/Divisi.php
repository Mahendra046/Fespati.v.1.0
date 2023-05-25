<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Anggota;

class Divisi extends Model
{

    protected $table = 'divisi';



    public function anggota()
    {
        return $this->hasMany(Anggota::class, 'id_divisi','id');
    }


    function handleDelete() {
        foreach ($this as $key => $value) {
            $path = public_path($value->foto);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }

    }

}
