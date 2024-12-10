<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\RiwayatPengeluaran;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::orderBy('tanggal', 'desc')->get();

        return view('pengeluaran.index', compact('pengeluaran'));
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
            'kategori' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'kegiatan' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'nullable|string|max:255',
            'bukti' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('bukti')) {
            $file = $request->file('bukti');

            // Buat nama file berdasarkan keterangan atau kegiatan
            $judulBukti = $request->input('keterangan') ?? $request->input('kegiatan');
            $namaFile = Str::slug($judulBukti) . '-' . time() . '.' . $file->getClientOriginalExtension();

            // Simpan file dengan nama yang dihasilkan
            $path = $file->storeAs('bukti', $namaFile, 'public');

            if (!$path) {
                return back()->withErrors(['bukti' => 'Gagal menyimpan bukti.']);
            }
            $validated['bukti'] = $path;
        }

        Pengeluaran::create($validated);
        return redirect()->back()->with('success', 'Data pengeluaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.show', compact('pengeluaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('pengeluaran.edit', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'kategori' => 'required|string|max:255',
            'bidang' => 'required|string|max:255',
            'kegiatan' => 'required|string|max:255',
            'nominal' => 'required|numeric',
            'keterangan' => 'nullable|string|max:255',
            'bukti' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
        ]);

        $pengeluaran = Pengeluaran::findOrFail($id);

        // Simpan riwayat perubahan
        RiwayatPengeluaran::create([
            'pengeluaran_id' => $id,
            'user_id' => Auth::id(),
            'old_data' => $pengeluaran->toArray(),
            'new_data' => $validated,
        ]);

        // Cek apakah file baru diunggah
        if ($request->hasFile('bukti')) {
            // Hapus file lama jika ada
            if ($pengeluaran->bukti) {
                Storage::disk('public')->delete($pengeluaran->bukti);
            }

            $file = $request->file('bukti');
            $judulBukti = $request->input('keterangan') ?? $request->input('kegiatan');
            $namaFile = Str::slug($judulBukti) . '-' . time() . '.' . $file->getClientOriginalExtension();

            // Simpan file baru
            $validated['bukti'] = $file->storeAs('bukti', $namaFile, 'public');
        }

        // Update data ke database
        $pengeluaran->update($validated);

        return redirect()->back()->with('success', 'Data pengeluaran berhasil diperbarui');
    }

    public function riwayat(){
        $riwayat = RiwayatPengeluaran::with(['pengeluaran', 'user'])->orderBy('created_at', 'desc')->get();
        return view('pengeluaran.riwayat', compact('riwayat'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);

        // Hapus file bukti jika ada
        if ($pengeluaran->bukti) {
            Storage::disk('public')->delete($pengeluaran->bukti);
        }

        $pengeluaran->delete();
        return redirect()->back()->with('success', 'Data pengeluaran berhasil dihapus');
    }
}
