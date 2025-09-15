<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Allocation;
use Illuminate\Http\Request;

class AllocationController extends Controller
{
    public function index()
    {
        $allocations = Allocation::all();
        return view('admin.assets.manage', compact('allocations'));
    }

    public function destroy($id)
    {
        Allocation::findOrFail($id)->delete();
        return redirect()->route('admin.allocations.index')->with('success', 'Data berhasil dihapus');
    }
}

