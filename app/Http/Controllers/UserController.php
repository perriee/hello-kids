<?php

namespace App\Http\Controllers;

use App\Models\Anak;
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
        return view('home');
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

        // $data_anak = [];

        // foreach ($anaks as $anak) {
        //     $id_anak = $anak->id;

        //     $data_layanan_anak = LayananAnak::where('anak_id', $id_anak)->get();

        //     $data_anak[] = [
        //         'anak' => $anak,
        //         'layanan_anak' => $data_layanan_anak,
        //     ];
        // }

        // dd($data_anak);

        return view('user.pages.anak', compact('page_title', 'anaks'));
    }

    public function viewLayananAnak($id)
    {
        $page_title = 'Layanan Anak';

        $anak = Anak::findOrFail($id);
        $layanan_anak = LayananAnak::where('anak_id', $id)->get();

        // dd($layanan_anak);

        return view('user.pages.layanan-anak', compact('page_title', 'layanan_anak', 'anak'));
    }

    public function viewHamil()
    {
        $page_title = 'Data Ibu Hamil';

        $id_user = Auth::id();

        $layananBumil = User::find($id_user)->layanan_bumil;

        return view('user.pages.hamil', compact('layananBumil', 'page_title'));
    }

    public function viewImun()
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
