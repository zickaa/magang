<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Hanya bisa diakses oleh user yang login
    public function __construct()
    {
        // $this->middleware('session.auth'); // pakai middleware auth Laravel
    }

    // Menampilkan dashboard
    public function index()
    {
        return view('dashboard'); // pastikan resources/views/dashboard.blade.php ada
    }

    // Tambahkan method-method berikut untuk menangani route sidebar
    public function perusahaan()
    {
        return view('pages.perusahaan'); // pastikan resources/views/perusahaan.blade.php ada
    }

    public function produk()
    {
        return view('pages.produk'); // pastikan resources/views/produk.blade.php ada
    }

    public function hubungi()
    {
        return view('pages.hubungi'); // pastikan resources/views/hubungi.blade.php ada
    }
    public function data()
    {
        // Rekap allocations gabung ke assets
        $allocations = DB::table('allocations')
            ->join('assets', 'allocations.asset_id', '=', 'assets.id')
            ->select(
                'assets.nama_asset as asset_name',
                DB::raw('SUM(allocations.jumlah) as total'),
                DB::raw('MAX(allocations.created_at) as tanggal')
            )
            ->groupBy('assets.nama_asset')
            ->get();

        // 👇 kirim ke view
        return view('pages.data', compact('allocations'));
    }

    public function manage()
    {
        // Tidak perlu, bisa dihapus
        // return view('pages.manage');
    }
}
