<?php

namespace App\Http\Controllers;
use App\Models\SiswaModel;
use App\Models\Mapel;
use Illuminate\Http\Request;

class DashboardguruController extends Controller
{
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }
    public function index()
    {
        $dataMapel = Mapel::where('id_kelas', 1)->get();
        return view('v_dashboardguru', compact('dataMapel'));
        
    }

    public function input()
    {
        $data = [
            'siswa' => $this->SiswaModel->alldata(),
        ];
        return view('v_inputnilaisiswa', $data);
    }
}
