<x-app-layout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
            <div class="container">
                <!-- Filter Bulan -->
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <form action="{{ route('dashboard') }}" method="GET">
                            <label for="bulan">Pilih Bulan:</label>
                            <select name="bulan" id="bulan" class="form-control" onchange="this.form.submit()">
                                <option value="semua" {{ $selectedBulan == 'semua' ? 'selected' : '' }}>Semua</option>
                                @foreach (range(1, 12) as $m)
                                    @php $month = date('Y-m', mktime(0, 0, 0, $m, 1)); @endphp
                                    <option value="{{ $month }}"
                                        {{ $selectedBulan == $month ? 'selected' : '' }}>
                                        {{ date('F Y', mktime(0, 0, 0, $m, 1)) }}
                                    </option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body rounded-lg" style="background-color: #F5F7FE">
                                    <h5 class="card-title mt-0 pt-2 pb-2 text-center rounded-lg"
                                        style="background-color: #1C274C;color:white">Pemasukan</h5>
                                    <canvas id="pemasukkanChart" width="20" height="20"></canvas>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body rounded-lg" style="background-color: #F5F7FE">
                                    <h5 class="card-title mt-0 pt-2 pb-2 text-center rounded-lg"
                                        style="background-color: #1C274C;color:white">Pengeluaran</h5>
                                    <canvas id="pengeluaranChart" width="20" height="20"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            {{-- <div class="card-body me-0 ms-0"> --}}
                            <div class="card border-dark mb-3 rounded-lg"
                                style="max-width: 18rem;border-color:#1C274C;border-weight:10px; background-color: #F5F7FE">
                                <div class="card-header">Total Pemasukkan</div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Rp {{ number_format($totalPemasukkan, 0, ',', '.') }}</h5>
                                </div>
                            </div>
                            <div class="card border-dark mb-3 rounded-lg"
                                style="max-width: 18rem;border-color:black;border-weight:10px; background-color: #F5F7FE">
                                <div class="card-header">Total Pemasukkan</div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}</h5>
                                </div>
                            </div>
                            <div class="card border-dark mb-3 rounded-lg"
                                style="max-width: 18rem;border-color:black;border-weight:10px; background-color: #F5F7FE">
                                <div class="card-header">Saldo</div>
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Rp {{ number_format($saldo, 0, ',', '.') }}</h5>
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-4">
        <div class="max-w-xl">
            <!-- Cetak Laporan -->
            <div class="container">
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h5>Cetak Laporan</h5>
                        <form action="{{ route('dashboard.cetak') }}" method="GET" target="_blank">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="bulan_mulai">Mulai Dari</label>
                                    <select name="bulan_mulai" id="bulan_mulai" class="form-control">
                                        @foreach (range(1, 12) as $m)
                                            @php $month = date('Y-m', mktime(0, 0, 0, $m, 1)); @endphp
                                            <option value="{{ $month }}">
                                                {{ date('F Y', mktime(0, 0, 0, $m, 1)) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="bulan_selesai">Sampai</label>
                                    <select name="bulan_selesai" id="bulan_selesai" class="form-control">
                                        @foreach (range(1, 12) as $m)
                                            @php $month = date('Y-m', mktime(0, 0, 0, $m, 1)); @endphp
                                            <option value="{{ $month }}">
                                                {{ date('F Y', mktime(0, 0, 0, $m, 1)) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2 mt-4">
                                    <button type="submit" class="btn btn-primary">CETAK</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/js/chart.js') }}"></script>

    <!-- Chart Data -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var pemasukkanLabels = @json($pemasukkanLabels);
            var pemasukkanData = @json($pemasukkanData);
            var pengeluaranLabels = @json($pengeluaranLabels);
            var pengeluaranData = @json($pengeluaranData);

            function renderChart(chartId, labels, data, chartLabel, borderColor, backgroundColor) {
                const ctx = document.getElementById(chartId).getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: chartLabel,
                            data: data,
                            backgroundColor: backgroundColor,
                            borderColor: borderColor,
                            borderWidth: 1,
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                        },
                    }
                });
            }

            // Render Charts
            if (pemasukkanLabels.length && pemasukkanData.length) {
                renderChart(
                    'pemasukkanChart',
                    pemasukkanLabels,
                    pemasukkanData,
                    'Pemasukkan',
                    ['rgba(75, 73, 166, 1)', 'rgba(217, 142, 88, 1)', 'rgba(211, 213, 229, 1)'],
                    ['rgba(75, 73, 166, 0.8)', 'rgba(217, 142, 88, 0.8)', 'rgba(211, 213, 229, 0.8)'],
                );
            }

            if (pengeluaranLabels.length && pengeluaranData.length) {
                renderChart(
                    'pengeluaranChart',
                    pengeluaranLabels,
                    pengeluaranData,
                    'Pengeluaran',
                    ['rgb(46, 36, 101, 1)', 'rgba(211, 213, 229, 0.8)', 'rgba(236, 228, 159, 1)',
                        'rgba(89, 179, 179, 1)'
                    ], // Border colors
                    ['rgb(46, 36, 101, 0.8)', 'rgba(211, 213, 229, 0.8)', 'rgba(236, 228, 159, 0.8)',
                        'rgba(89, 179, 179, 0.8)'
                    ] // Background colors
                );
            }
        });
    </script>

</x-app-layout>
