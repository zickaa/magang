<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::all();
        return view('admin.assets.index', compact('assets'));
    }

    public function manage()
    {
        $assets = Asset::all();
        return view('admin.assets.manage', compact('assets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_asset' => 'required|string|max:255',
            'kode_asset' => 'required|string|max:100|unique:assets,kode_asset',
        ]);

        Asset::create($request->all());

        return redirect()->route('admin.assets.manage')->with('success', 'Asset berhasil ditambahkan');
    }

    public function edit(Asset $asset)
    {
        return view('admin.assets.edit', compact('asset'));
    }

    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'nama_asset' => 'required|string|max:255',
            'kode_asset' => 'required|string|max:100|unique:assets,kode_asset,' . $asset->id,
        ]);

        $asset->update($request->all());

        return redirect()->route('admin.assets.manage')->with('success', 'Asset berhasil diperbarui');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect()->route('admin.assets.manage')->with('success', 'Asset berhasil dihapus');
    }
}
