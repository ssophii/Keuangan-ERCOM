<x-app-layout>
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-4">
        <h3>Riwayat Perubahan Pengeluaran</h3>
        <table id="riwayatTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>User</th>
                    <th>Keterangan</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td data-order="{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i') }}">
                            {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y H:i') }}
                        </td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->new_data['keterangan'] ?? '-' }}</td>
                        <td>
                            <button class="btn btn-info pt-2 pb-2" data-toggle="modal" data-target="#detailModal{{ $item->id }}">
                                Lihat Detail
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Container -->
    @foreach ($riwayat as $item)
        <div class="modal fade" id="detailModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Perubahan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-3">
                                <strong>User</strong>
                            </div>
                            <div class="col-6">
                                : {{ $item->user->name }}
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-3">
                                <strong>Tanggal</strong>
                            </div>
                            <div class="col-6">
                                : {{ $item->created_at->format('d-m-Y H:i') }}
                            </div>
                        </div>

                        <div class="card bg-light mb-3">
                            <div class="card-header"><strong>Data Lama</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">Tanggal</div>
                                    <div class="col-6">: {{ $item->old_data['tanggal'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Kategori</div>
                                    <div class="col-6">: {{ $item->old_data['kategori'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Bidang</div>
                                    <div class="col-6">: {{ $item->old_data['bidang'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Kegiatan</div>
                                    <div class="col-6">: {{ $item->old_data['kegiatan'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Nominal</div>
                                    <div class="col-6">: {{ $item->old_data['nominal'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Keterangan</div>
                                    <div class="col-6">: {{ $item->old_data['keterangan'] ?? '-' }} </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-3">Bukti</div>
                                    <div class="col-6">:
                                        @if ( $item->old_data['bukti'])
                                            <p class="mt-2">
                                                File saat ini:
                                                <a href="{{ asset('storage/' . $item->old_data['bukti']) }}"
                                                    target="_blank">{{ $item->old_data['bukti'] }}</a>
                                            </p>
                                        @endif
                                    </div>
                                </div> --}}

                            </div>
                        </div>

                        <div class="card bg-light mb-3">
                            <div class="card-header"><strong>Data Baru</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">Tanggal</div>
                                    <div class="col-6">: {{ $item->new_data['tanggal'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Kategori</div>
                                    <div class="col-6">: {{ $item->new_data['kategori'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Bidang</div>
                                    <div class="col-6">: {{ $item->new_data['bidang'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Kegiatan</div>
                                    <div class="col-6">: {{ $item->new_data['kegiatan'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Nominal</div>
                                    <div class="col-6">: {{ $item->new_data['nominal'] ?? '-' }} </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">Keterangan</div>
                                    <div class="col-6">: {{ $item->new_data['keterangan'] ?? '-' }} </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-3">Bukti</div>
                                    <div class="col-6">:
                                        @if ( $item->new_data['bukti'])
                                            <p class="mt-2">
                                                File saat ini:
                                                <a href="{{ asset('storage/' . $item->new_data['bukti']) }}"
                                                    target="_blank">{{ $item->new_data['bukti'] }}</a>
                                            </p>
                                        @endif
                                    </div>
                                </div> --}}

                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        $(document).ready(function() {
            $('#riwayatTable').DataTable(); // DataTables Initialization
        });
    </script>
</x-app-layout>
