<?php

namespace App\Http\Controllers;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class AdminController extends Controller
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
}
