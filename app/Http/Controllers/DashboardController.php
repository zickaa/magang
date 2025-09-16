<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function perusahaan()
    {
        return view('pages.perusahaan');
    }

    public function produk()
    {
        return view('pages.produk');
    }

    public function hubungi()
    {
        return view('pages.hubungi');
    }

    public function data()
{
    $rekap = DB::table('allocations')
        ->join('assets', 'allocations.asset_id', '=', 'assets.id')
        ->join('locations', 'allocations.to_location_id', '=', 'locations.id')
        ->select(
            'locations.nama_lokasi',
            DB::raw('SUM(allocations.jumlah) as total_asset')
        )
        ->groupBy('locations.nama_lokasi')
        ->orderBy('locations.nama_lokasi')
        ->get();

    // ✅ ubah get() → paginate(5)
    $locations = Allocation::with(['asset', 'fromLocation', 'toLocation'])
        ->orderBy('date', 'desc')
        ->paginate(5); // tampil 5 data per halaman

    return view('pages.data', compact('rekap', 'locations'));
}

}
