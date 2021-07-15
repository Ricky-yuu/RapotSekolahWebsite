<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function alldata()
    {
        return DB::table('tb_siswa')
        ->join('kelas', 'kelas.id_kelas', '=', 'tb_siswa.id_kelas')
        ->where('kelas.tingkat','=','2')
        ->get();
    }
}
