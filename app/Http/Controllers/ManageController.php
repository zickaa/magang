<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
use App\Models\Allocation;
use App\Models\Location;

class ManageController extends Controller
{
    public function index()
    {
        $allocations = Allocation::with(['asset', 'fromLocation', 'toLocation'])
            ->orderBy('date', 'desc')
            ->get();

        $assets = Asset::all();
        $locations = Location::all();

        return view('pages.manage', compact('allocations', 'assets', 'locations'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'asset_id'       => 'required|exists:assets,id',
            'from_location_id' => 'nullable|exists:locations,id',
            'to_location_id'   => 'required|exists:locations,id',
            'jumlah'         => 'required|integer|min:1',
            'date'           => 'required|date',
        ]);

        Allocation::create([
            'asset_id'        => $request->asset_id,
            'from_location_id' => $request->from_location_id,
            'to_location_id'  => $request->to_location_id,
            'jumlah'          => $request->jumlah,
            'date'            => $request->date,
        ]);

        return redirect()->route('manage.index')->with('success', 'Data alokasi berhasil disimpan!');
    }
}
