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
}
