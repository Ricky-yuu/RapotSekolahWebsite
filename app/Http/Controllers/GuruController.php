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
}
