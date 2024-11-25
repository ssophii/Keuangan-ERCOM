<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Keuangan</h1>
    <p>Periode: {{ date('F Y', strtotime($bulanMulai . '-01')) }} - {{ date('F Y', strtotime($bulanSelesai . '-01')) }}</p>

    <h3>Pemasukkan</h3>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Nominal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemasukkan as $item)
            <tr>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->kategori }}</td>
                <td>Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Pengeluaran</h3>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Bidang</th>
                <th>Kegiatan</th>
                <th>Nominal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengeluaran as $item)
            <tr>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->bidang }}</td>
                <td>{{ $item->kegiatan }}</td>
                <td>Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3>Total</h3>
    <p>Total Pemasukkan: Rp {{ number_format($totalPemasukkan, 0, ',', '.') }}</p>
    <p>Total Pengeluaran: Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</p>
    <p>Saldo: Rp {{ number_format($saldo, 0, ',', '.') }}</p>
</body>
</html>
