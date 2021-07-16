<?php

namespace App\Http\Controllers;
use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }
    public function index()
    {
        $data = [
            'guru' => $this->GuruModel->alldata(),
        ];
        return view('v_dataguru', $data);
    }
    public function detail($nip)
    {
        if (!$this->GuruModel->detaildata($nip))
        {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->detaildata($nip),
        ];
        return view('v_detailguru', $data);
    }
    public function add()
    {
        return view('v_addguru');
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
            'nip' => request()->nip,
            'nama_guru' => request()->nama_guru,
            'username' => request()->username,
            'password' => request()->password,
            'email' => request()->email,
            'alamat' => request()->alamat,
            'id_mapel' => request()->nama_mapel,
        ];
        $this->GuruModel->adddata($data);
        return redirect()->route('dataguruindex')->with('pesan','data berhasil ditambahkan');
          
    }public function edit($nip)
    {
        
        if (!$this->GuruModel->detaildata($nip))
        {
            abort(404);
        }
        $data = [
            'nip' => $this->GuruModel->detaildata($nip),
        ];
        return view('v_editguru',$data);
    }
    public function update($nip)
    {
        $data = [
            'nip' => request()->nip,
            'nama_guru' => request()->nama_guru,
            'username' => request()->username,
            'password' => request()->password,
            'email' => request()->email,
            'alamat' => request()->alamat,
            'id_mapel' => request()->nama_mapel,
        ]; 
        $this->GuruModel->editdata($nip, $data); 
          
        return redirect()->route('dataguruindex')->with('pesan','data berhasil diupdate');
    }
    public function delete($nip)
    {
        $this->GuruModel->deletedata($nip);  
        return redirect()->route('dataguruindex')->with('pesan','data berhasil dihapus');
    }
    
 

}   
    

