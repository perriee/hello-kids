<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Imun;
use App\Models\Jadwal;
use App\Models\JenisImun;
use App\Models\LayananAnak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();

        return view('home', compact('jadwals'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function viewAnak()
    {
        $page_title = 'Data Anak';

        $id_user = Auth::id();

        $data_user = User::with('anak')->find($id_user);

        $anaks = $data_user->anak;

        return view('user.pages.anak', compact('page_title', 'anaks'));
    }

    public function viewLayananAnak($id)
    {
        $page_title = 'Layanan Anak';

        $anak = Anak::findOrFail($id);

        $layanan_anak = LayananAnak::where('anak_id', $id)->get();

        $data_grafik = LayananAnak::select('created_at', 'lingkar_kepala', 'berat_badan', 'tinggi_badan')
            ->where('anak_id', $id)
            ->get();

        // dd($data_grafik);

        return view('user.pages.layanan-anak', compact('page_title', 'layanan_anak', 'anak', 'data_grafik'));
    }

    public function viewImunisasiAnak($id)
    {
        $page_title = 'Imunisasi Anak';

        $anak = Anak::findOrFail($id);

        $imunisasi_anak = Imun::with('jenis_imun')->where('anak_id', $id)->get();

        return view('user.pages.imun', compact('anak', 'imunisasi_anak', 'page_title'));
    }

    public function viewHamil()
    {
        $page_title = 'Data Ibu Hamil';

        $id_user = Auth::id();

        $data_ibu = Auth::user();

        $layananBumil = User::find($id_user)->layanan_bumil;

        // dd($data_ibu);

        return view('user.pages.hamil', compact('data_ibu', 'layananBumil', 'page_title'));
    }

    public function viewJenisImun()
    {
        $page_title = 'Data Jenis Imunisasi';

        $jenis_imun = JenisImun::all();

        return view('user.pages.jenis-imun', compact('jenis_imun', 'page_title'));
    }

    public function viewJadwal()
    {
        $page_title = 'Jadwal Pemeriksaan';

        $jadwals = Jadwal::all();

        return view('user.pages.jadwal', compact('jadwals', 'page_title'));
    }
}
