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
        $pemasukkan = Pemasukkan::all();

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
        $validate = $request->validate([
            'tanggal' => 'required|date',
            'kategori' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Pemasukkan::create([
            'tanggal' => $validate['tanggal'],
            'kategori' => $validate['kategori'],
            'nominal' => $validate['nominal'],
            'keterangan' => $validate['keterangan'],
        ]);
        return redirect()->back()->with('success', 'Data pemasukkan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'tanggal' => 'required|date',
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
