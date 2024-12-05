<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Keuangan ERCOM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        header {
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }
        .logo-left {
            position: absolute;
            top: 0;
            left: 0;
            height: 120px;
        }
        .logo-right {
            position: absolute;
            top: 0;
            right: 0;
            height: 80px;
        }
        .kop-text {
            text-align: center;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .footer {
            text-align: right;
            margin-top: 20px;
        }
        .signature {
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <div class="kop">
            <img class="logo-left" src="{{ asset('assets/images/logo-unib.png') }}" alt="Logo UNIB" style="height: 80px;">
            <img class="logo-right" src="{{ asset('assets/images/ercom-mini.png') }}" alt="Logo ERCOM" style="height: 80px;">
            <h3 style="margin-bottom: 0%">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET, DAN TEKNOLOGI<br>
                UNIVERSITAS BENGKULU<br>
                FAKULTAS TEKNIK<br>
                UKM ENGINEERING RESEARCH COMMUNITY</h3>
            <p style="margin-top: 0%">Sekretariat: Gedung Kesekretariatan Himpunan dan UKM FT KBM UNIB, Kota Bengkulu</p>
        </div>
        <hr style="border: 1px solid black; ">
        <h3 style="text-align: center;">LAPORAN KEUANGAN ERCOM</h3>
    </header>
    <p>Periode: {{ date('F Y', strtotime($bulanMulai . '-01')) }} - {{ date('F Y', strtotime($bulanSelesai . '-01')) }}</p>
    <p><strong>Saldo Terakhir:</strong> Rp {{ number_format($saldoTerakhir, 0, ',', '.') }}</p>

    <h4>Pemasukan</h4>
    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Bidang</th>
                <th>Nominal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemasukkan as $item)
            <tr>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->kategori }}</td>
                <td>{{ $item->bidang }}</td>
                <td>Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h4>Pengeluaran</h4>
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

    <h4>Total</h4>
    <table>
        <tr>
            <td>Saldo Terakhir</td>
            <td>Rp {{ number_format($saldoTerakhir, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Total Pemasukan</td>
            <td>Rp {{ number_format($totalPemasukkan, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Total Pengeluaran</td>
            <td>Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Total Saldo</td>
            <td>Rp {{ number_format($totalsaldo, 0, ',', '.') }}</td>
        </tr>
    </table>

    <div class="footer">
        <p>Bengkulu, {{ date('d F Y') }}</p>
        <p>Bendahara Umum</p>
        <div class="signature">
        </div>
        <p>Yulia Pratiwi</p>
        <p>(G1A021029)</p>
    </div>
</body>
</html>
