<?php

namespace App\Http\Controllers;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }
    public function index()
    {
        $data = [
            'siswa' => $this->SiswaModel->alldata(),
        ];
        return view('v_datasiswa_X', $data);
    }
    public function detail($nis)
    {
        if (!$this->SiswaModel->detaildata($nis))
        {
            abort(404);
        }
        $data = [
            'siswa' => $this->SiswaModel->detaildata($nis),
        ];
        return view('v_detailsiswa', $data);
    }
    public function add()
    {
        return view('v_addsiswa');
    }
    public function insert()
    {
        // Request()->validate([
        //     'nip' => 'required|unique:tb_guru,nip',
        //     'nama_guru' => 'required',
        //     'username' => 'required',
        //     'password' => 'required',
        //     'email' => 'required',
        //     'alamat' => 'required',
        //     'mapel' => 'required',
        // ],[
        //     'nip.required' => 'wajib isi!!!',
        //     'nip.unique' => 'username ini sudah ada!!!',
        //     'username.required' => 'wajib isi!!!',
        //     'nama_guru.required' => 'wajib isi!!!',
        //     'password.required' => 'wajib isi!!!',
        //     'email.required' => 'wajib isi!!!',
        //     'alamat.required' => 'wajib isi!!!',
        //     'mapel.required' => 'wajib isi!!!',

        // ]); 

        //upload gambar
        $data = [
            'nis' => request()->nis,
            'nama_siswa' => request()->nama_siswa,
            'username' => request()->username,
            'password' => request()->password,
            'email' => request()->email,
            'alamat' => request()->alamat,
            'id_kelas' => request()->kelas,
        ];
        $this->SiswaModel->adddata($data);
        return redirect()->route('siswa')->with('pesan','data berhasil ditambahkan');
          
    }
}
