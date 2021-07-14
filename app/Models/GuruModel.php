<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GuruModel extends Model
{
    public function alldata()
    {
        return DB::table('tb_guru')
        ->join('mapel', 'mapel.id_mapel', '=', 'tb_guru.id_mapel')
            ->get();
    }
    public function detaildata($nip)
    {
        return  DB::table('tb_guru')->where('nip', $nip)
        ->join('mapel', 'mapel.id_mapel', '=', 'tb_guru.id_mapel')
        ->first();
    }
}