<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Allocation;
use Illuminate\Support\Facades\DB;

class AllocationController extends Controller
{
    // Halaman Manage (tampilkan form & daftar allocation)
    public function index()
    {
        $assets = Asset::all(); // semua asset untuk dropdown
        $allocations = Allocation::with('asset')->latest()->get(); // daftar allocation (relasi asset)

        return view('pages.manage', compact('assets', 'allocations'));
    }

    // Simpan allocation baru
    public function store(Request $request)
    {
        $request->validate([
            'asset_id' => 'required|exists:assets,id',
            'jumlah'   => 'required|integer|min:1',
        ]);

        Allocation::create([
            'asset_id' => $request->asset_id,
            'jumlah'   => $request->jumlah,
        ]);


        return redirect()->route('manage.index')->with('success', 'Allocation berhasil ditambahkan!');
    }

    public function data()
    {
        $aset = Allocation::select(
            'asset_id',
            DB::raw('SUM(jumlah) as total'),
            DB::raw('MAX(date) as tanggal')
        )
            ->with('asset')
            ->groupBy('asset_id')
            ->get();

        return view('pages.data', compact('aset'));
    }
}
