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
        ->join('kelas', 'kelas.id_kelas', '=', 'tb_guru.id_kelas')
            ->get();
    }

    public function detaildata($nip)
    {
        return  DB::table('tb_guru')->where('nip', $nip)
        ->join('kelas', 'kelas.id_kelas', '=', 'tb_guru.id_kelas')
        ->first();
    }
    
    public function adddata($data)
    {
        DB::table('tb_guru')
        
        ->insert($data)
        ;

    }
    public function editdata($nip, $data)
    {
        DB::table('nip')->where('nip', $nip)->update($data);
    }
    
    public function deletedata($nip)
    {
        DB::table('tb_guru')->where('nip', $nip)->delete();
    }
}