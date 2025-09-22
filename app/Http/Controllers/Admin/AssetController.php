<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Tampilkan semua aset (list).
     */
    public function index()
    {
        $assets = Asset::orderBy('id', 'desc')->get();
        return view('admin.assets.index', compact('assets'));
    }

    /**
     * Form tambah asset baru.
     */
    public function create()
    {
        return view('admin.assets.create');
    }

    /**
     * Simpan asset baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asset_name' => 'required|string|max:255',
            // 'kode_asset' => 'required|string|max:100|unique:assets,kode_asset',
            'jumlah'     => 'nullable|integer|min:0',
        ]);

        Asset::create($request->only(['asset_name', 'kode_asset', 'jumlah']));

        return redirect()->route('admin.assets.index')
            ->with('success', 'Asset berhasil ditambahkan ✅');
    }

    /**
     * Form edit asset.
     */
    public function edit(Asset $asset)
    {
        return view('admin.assets.edit', compact('asset'));
    }

    /**
     * Update data asset.
     */
    public function update(Request $request, Asset $asset)
    {
        $request->validate([
            'asset_name' => 'required|string|max:255',
            // 'kode_asset' => 'required|string|max:100|unique:assets,kode_asset,' . $asset->id,
            'jumlah'     => 'nullable|integer|min:0',
        ]);

        $asset->update($request->only(['asset_name', 'kode_asset', 'jumlah']));

        return redirect()->route('admin.assets.index')
            ->with('success', 'Asset berhasil diperbarui ✨');
    }

    /**
     * Hapus asset.
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();

        return redirect()->route('admin.assets.index')
            ->with('success', 'Asset berhasil dihapus 🗑️');
    }

    /**
     * Halaman manage asset (khusus untuk menambah jumlah).
     */
    public function manage()
    {
        $assets = Asset::orderBy('id', 'desc')->get();
        return view('admin.assets.manage', compact('assets'));
    }

    /**
     * Proses tambah jumlah asset dari halaman manage.
     */
    public function storeManage(Request $request)
    {
        $request->validate([
            'asset_id' => 'required|exists:assets,id',
            'jumlah'   => 'required|integer|min:1',
        ]);

        $asset = Asset::findOrFail($request->asset_id);

        // pastikan kolom `jumlah` ada di tabel assets
        $asset->jumlah = ($asset->jumlah ?? 0) + $request->jumlah;
        $asset->save();

        return redirect()->route('admin.assets.manage')
            ->with('success', 'Jumlah asset berhasil diperbarui ✅');
    }
}
