<?php

namespace App\Http\Controllers;

use App\Models\Pemasukkan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Ambil filter bulan dari request (jika ada)
        $bulan = $request->input('bulan', 'semua'); // Default "semua" jika tidak ada filter

    // Query Pemasukkan
    $pemasukkanQuery = Pemasukkan::selectRaw('kategori, SUM(nominal) as total');
    if ($bulan !== 'semua') {
        $pemasukkanQuery->whereMonth('tanggal', '=', date('m', strtotime($bulan)))
                        ->whereYear('tanggal', '=', date('Y', strtotime($bulan)));
    }
    $pemasukkan = $pemasukkanQuery->groupBy('kategori')->get();
    $pemasukkanLabels = $pemasukkan->pluck('kategori');
    $pemasukkanData = $pemasukkan->pluck('total');

    // Query Pengeluaran
    $pengeluaranQuery = Pengeluaran::selectRaw('kategori, SUM(nominal) as total');
    if ($bulan !== 'semua') {
        $pengeluaranQuery->whereMonth('tanggal', '=', date('m', strtotime($bulan)))
                         ->whereYear('tanggal', '=', date('Y', strtotime($bulan)));
    }
    $pengeluaran = $pengeluaranQuery->groupBy('kategori')->get();
    $pengeluaranLabels = $pengeluaran->pluck('kategori');
    $pengeluaranData = $pengeluaran->pluck('total');

    // Data tambahan
    $totalPemasukkan = $pemasukkan->sum('total');
    $totalPengeluaran = $pengeluaran->sum('total');
    $saldo = $totalPemasukkan - $totalPengeluaran;

    // Jika data kosong, set default value
    $pemasukkanLabels = $pemasukkanLabels->isEmpty() ? ['Data Kosong'] : $pemasukkanLabels;
    $pemasukkanData = $pemasukkanData->isEmpty() ? [0] : $pemasukkanData;

    $pengeluaranLabels = $pengeluaranLabels->isEmpty() ? ['Data Kosong'] : $pengeluaranLabels;
    $pengeluaranData = $pengeluaranData->isEmpty() ? [0] : $pengeluaranData;

    // Kirim ke view
    return view('dashboard', [
        'pemasukkanLabels' => $pemasukkanLabels,
        'pemasukkanData' => $pemasukkanData,
        'pengeluaranLabels' => $pengeluaranLabels,
        'pengeluaranData' => $pengeluaranData,
        'totalPemasukkan' => $totalPemasukkan,
        'totalPengeluaran' => $totalPengeluaran,
        'saldo' => $saldo,
        'selectedBulan' => $bulan
    ]);
    }


    public function cetakLaporan(Request $request)
    {
        $bulanMulai = $request->get('bulan_mulai');
        $bulanSelesai = $request->get('bulan_selesai');

        // Validasi input bulan
        if (!$bulanMulai || !$bulanSelesai) {
            return redirect()->back()->with('error', 'Harap pilih rentang bulan.');
        }

        // Ambil data berdasarkan rentang bulan
        $pemasukkan = Pemasukkan::whereBetween('tanggal', [
            $bulanMulai . '-01',
            $bulanSelesai . '-31'
        ])->get();

        $pengeluaran = Pengeluaran::whereBetween('tanggal', [
            $bulanMulai . '-01',
            $bulanSelesai . '-31'
        ])->get();

        $totalPemasukkan = $pemasukkan->sum('nominal');
        $totalPengeluaran = $pengeluaran->sum('nominal');
        $saldo = $totalPemasukkan - $totalPengeluaran;

        // Return ke view cetak
        return view('cetak.laporan', compact('pemasukkan', 'pengeluaran', 'totalPemasukkan', 'totalPengeluaran', 'saldo', 'bulanMulai', 'bulanSelesai'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
