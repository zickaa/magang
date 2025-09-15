<?php

// app/Http/Controllers/ManageController.php

// app/Http/Controllers/ManageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Allocation;

class ManageController extends Controller
{
    public function index()
    {
        $allocations = Allocation::orderBy('date', 'desc')->get();
        return view('pages.manage', compact('allocations'));
    }

    // app/Http/Controllers/ManageController.php
    public function store(Request $request)
    {
        $request->validate([
            'asset_name'    => 'required|string|max:255',
            'from_location' => 'required|string|max:255',
            'to_location'   => 'required|string|max:255',
            'date'          => 'required|date',
        ]);

        Allocation::create([
            'asset_name'    => $request->asset_name,
            'from_location' => $request->from_location,
            'to_location'   => $request->to_location,
            'date'          => $request->date,
        ]);

        return redirect()->route('manage.index')->with('success', 'Data alokasi berhasil disimpan!');
    }


    public function data()
    {
        // Rekap aset → langsung dari tabel assets
        $assets = Asset::all();

        // Detail alokasi → dari tabel allocations
        $locations = Allocation::orderBy('date', 'desc')->get();

        return view('pages.data', compact('assets', 'locations'));
    }
}
