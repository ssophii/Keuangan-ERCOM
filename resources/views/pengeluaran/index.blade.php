<x-app-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg mt-4">
        <div class="max-w-xl">
            <div class="card">
                <div class="mt-1 mr-3 ml-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3> Data Pengeluaran </h3>
                        @if (auth()->user()->role == 'bendahara')
                            <button type="button" class="btn btn-primary"
                                style="width: 4.3cm; height: 1cm; border-radius: 3px;" data-toggle="modal"
                                data-target="#modalTambah">
                                <strong>Tambah Pengeluaran</strong>
                            </button>
                        @endif
                        <!-- Modal Tambah Data -->
                        <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-md">
                                <div class="modal-content">
                                    <form action="{{ route('pengeluaran.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTambahLabel">Tambah Data pengeluaran</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-center">Form Tambah pengeluaran</h3>
                                            <div class="container">
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Tanggal</div>
                                                    <div class="col">
                                                        <input type="date" name="tanggal" class="form-control"
                                                            placeholder="Masukkan tanggal pengeluaran" required>
                                                        @error('tanggal')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Kategori</div>
                                                    <div class="col">
                                                        <select name="kategori" class="form-control" required>
                                                            <option value="" disabled selected>Pilih kategori
                                                            </option>
                                                            <option value="Inventaris">Inventaris</option>
                                                            <option value="Sewa">Sewa</option>
                                                            <option value="Proker">Proker</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                        @error('kategori')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Bidang</div>
                                                    <div class="col">
                                                        <select name="bidang" class="form-control" required>
                                                            <option value="" disabled selected>Pilih Bidang
                                                            </option>
                                                            <option value="Inti">Inti</option>
                                                            <option value="Biro Keuangan">Biro Keuangan</option>
                                                            <option value="Biro Kestari">Biro Kestari</option>
                                                            <option value="PSDM">PSDM</option>
                                                            <option value="Diklat">Diklat</option>
                                                            <option value="Ripi">Ripi</option>
                                                            <option value="Kominfo">Kominfo</option>
                                                        </select>
                                                        @error('bidang')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Kegiatan</div>
                                                    <div class="col">
                                                        <input type="text" name="kegiatan" class="form-control"
                                                            placeholder="Masukkan kegiatan pengeluaran">
                                                        @error('kegiatan')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Nominal</div>
                                                    <div class="col">
                                                        <input type="number" name="nominal" class="form-control"
                                                            placeholder="Masukkan nominal pengeluaran">
                                                        @error('nominal')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Keterangan</div>
                                                    <div class="col">
                                                        <input type="text" name="keterangan" class="form-control"
                                                            placeholder="Masukkan keterangan pengeluaran">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="col font-weight-bold mt-3 mb-2">Bukti</div>
                                                    <div class="col">
                                                        <input type="file" name="bukti" class="form-control"
                                                            placeholder="Masukkan keterangan pengeluaran">
                                                        @error('bukti')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table id="datapengeluaran" class="ui celled table" style="width:100%">
                        <thead>
                            <tr>
                                {{-- <th>No</th> --}}
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Bidang</th>
                                <th>Kegiatan</th>
                                <th>Nominal</th>
                                <th>Keterangan</th>
                                <th>Bukti</th>
                                @if (auth()->user()->role == 'bendahara')
                                    <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengeluaran as $data)
                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td data-order="{{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }}">
                                        {{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y') }}</td>
                                    <td>{{ $data->kategori }}</td>
                                    <td>{{ $data->bidang }}</td>
                                    <td>{{ $data->kegiatan }}</td>
                                    <td>Rp{{ number_format($data->nominal, 0, ',', '.') }}</td>
                                    <td>{{ $data->keterangan }}</td>
                                    <td>
                                        @if ($data->bukti)
                                            <a href="{{ asset('storage/' . $data->bukti) }}"
                                                class="btn btn-info " target="_blank">
                                                <i class="bi bi-file-earmark-pdf"></i> Lihat Bukti
                                            </a>
                                        @else
                                            <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>
                                    @if (auth()->user()->role == 'bendahara')
                                        <td class="d-flex justify-content-center">
                                            <!-- Tombol Edit -->
                                            <button type="button"
                                                class="btn btn-warning justify-content-center align-items-center"
                                                style="width: 35px; height: 35px; border-radius: 10px; margin-right: 10px;"
                                                data-toggle="modal" data-target="#modalEdit{{ $data->id }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </td>
                                    @endif
                                </tr>
                                <!-- Modal untuk setiap baris -->
                                <div class="modal fade" id="modalEdit{{ $data->id }}" tabindex="-1"
                                    aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <!-- Form untuk update -->
                                            <form action="{{ route('pengeluaran.update', $data->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel{{ $data->id }}">Edit
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3 class="text-center">Edit Data pengeluaran</h3>
                                                    <div class="container">
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Tanggal</div>
                                                            <div class="col">
                                                                <input type="date" name="tanggal"
                                                                    class="form-control"
                                                                    value="{{ \Carbon\Carbon::parse($data->tanggal)->format('Y-m-d') }}"
                                                                    required>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Kategori</div>
                                                            <div class="col">
                                                                <select name="kategori" class="form-control" required>
                                                                    <option value="Inventaris"
                                                                        {{ $data->kategori === 'Inventaris' ? 'selected' : '' }}>
                                                                        Inventaris</option>
                                                                    <option value="Sewa"
                                                                        {{ $data->kategori === 'Sewa' ? 'selected' : '' }}>
                                                                        Sewa</option>
                                                                    <option value="Proker"
                                                                        {{ $data->kategori === 'Proker' ? 'selected' : '' }}>
                                                                        Proker</option>
                                                                    <option value="Lainnya"
                                                                        {{ $data->kategori === 'Lainnya' ? 'selected' : '' }}>
                                                                        Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Bidang</div>
                                                            <div class="col">
                                                                <select name="bidang" class="form-control" required>
                                                                    <option value="Inti"
                                                                        {{ $data->bidang === 'Inti' ? 'selected' : '' }}>
                                                                        Inti</option>
                                                                    <option value="Biro Keuangan"
                                                                        {{ $data->bidang === 'Biro Keuangan' ? 'selected' : '' }}>
                                                                        Biro Keuangan</option>
                                                                    <option value="Biro Kestari"
                                                                        {{ $data->bidang === 'Biro Kestari' ? 'selected' : '' }}>
                                                                        Biro Kestari</option>
                                                                    <option value="PSDM"
                                                                        {{ $data->bidang === 'PSDM' ? 'selected' : '' }}>
                                                                        PSDM</option>
                                                                    <option value="Diklat"
                                                                        {{ $data->bidang === 'Diklat' ? 'selected' : '' }}>
                                                                        Diklat</option>
                                                                    <option value="Ripi"
                                                                        {{ $data->bidang === 'Ripi' ? 'selected' : '' }}>
                                                                        Ripi</option>
                                                                    <option value="Kominfo"
                                                                        {{ $data->bidang === 'Kominfo' ? 'selected' : '' }}>
                                                                        Kominfo</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Kegiatan</div>
                                                            <div class="col">
                                                                <input type="text" name="kegiatan"
                                                                    class="form-control"
                                                                    value="{{ $data->kegiatan }}">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Nominal</div>
                                                            <div class="col">
                                                                <input type="text" name="nominal"
                                                                    class="form-control"
                                                                    value="{{ $data->nominal }}">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Keterangan
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" name="keterangan"
                                                                    class="form-control"
                                                                    value="{{ $data->keterangan }}">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="col font-weight-bold mt-3 mb-2">Bukti</div>
                                                            <div class="col">
                                                                @if ($data->bukti)
                                                                    <p class="mt-2">
                                                                        File saat ini:
                                                                        <a href="{{ asset('storage/' . $data->bukti) }}"
                                                                            target="_blank">{{ $data->bukti }}</a>
                                                                    </p>
                                                                @endif
                                                                <input type="file" name="bukti"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Simpan
                                                        Perubahan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
            {{-- datatables --}}
            <script>
                $(document).ready(function() {
                    $('#datapengeluaran').DataTable();
                });
            </script>
        </div>
    </div>
</x-app-layout>
