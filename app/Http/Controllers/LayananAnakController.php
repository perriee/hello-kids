<?php

namespace App\Http\Controllers;

use App\Exports\LayananAnakExport;
use App\Models\LayananAnak;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LayananAnakController extends Controller
{
    public function export()
    {
        $layanan_anak = LayananAnak::all();

        return Excel::download(new LayananAnakExport($layanan_anak), 'layanan_anak.xlsx');
    }
}
