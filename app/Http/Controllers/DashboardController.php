<?php

namespace App\Http\Controllers;

use App\Models\JurusanModel;
use App\Models\MahasiswaModel;
use App\Models\User;
use Carbon\Carbon;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Dashboard';
        $jumlah_jurusan = JurusanModel::count();
        $akses_admin = User::count();
        $l = MahasiswaModel::where('jenis_kelamin', 'Laki-Laki')->count();
        $p = MahasiswaModel::where('jenis_kelamin', 'Perempuan')->count();
        $total_mahasiswa = MahasiswaModel::count();
        $jurusan = JurusanModel::with('mahasiswa')->get();
        $today = Carbon::now()->format('F d, Y');
        $lastLogin = Auth::user()->last_login ? Auth::user()->last_login->format('Y-m-d H:i:s') : 'Never';
        $ipAddress = $request->ip();
        $agent = new Agent();
        $browser = $agent->browser();

        foreach ($jurusan as $key => $value) {
            $id_jurusan = $value->id;
            $nama_jurusan = $value->nama_jurusan;
            $jumlah = count($value->mahasiswa);
            $jumlah_mahasiswa[$id_jurusan] = [
                'nama_jurusan' => $nama_jurusan,
                'jumlah' => $jumlah
            ];
        }

        return view('admin.dashboard.dashboard', compact(
            'title',
            'jumlah_jurusan',
            'akses_admin',
            'l',
            'p',
            'total_mahasiswa',
            'jumlah_mahasiswa',
            'today',
            'lastLogin',
            'ipAddress',
            'browser'
        ));
    }
}
