<?php

namespace App\Http\Controllers;

use App\Models\Pemasukkan;
use Illuminate\Http\Request;

class PemasukkanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemasukkan = Pemasukkan::orderBy('tanggal', 'asc')->get();
        // $pemasukkan = Pemasukkan::select('*')->orderByRaw("strftime('%m', tanggal) ASC, strftime('%d', tanggal) ASC")->get();

        return view('pemasukkan.index', compact('pemasukkan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'bidang' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Pemasukkan::create($validated);
        return redirect()->back()->with('success', 'Data pemasukkan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemasukkan = Pemasukkan::findOrFail($id);
        return view('pemasukkan.show', compact('pemasukkan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemasukkan = Pemasukkan::findOrFail($id);
        return view('pemasukkan.edit', compact('pemasukkan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'tanggal' => 'required|date',
            'bidang' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        $pemasukkan = Pemasukkan::findOrFail($id);
        $pemasukkan->update($validate);
        return redirect()->back()->with('success', 'Data pemasukkan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pemasukkan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data pemasukkan berhasil dihapus');
    }
}
