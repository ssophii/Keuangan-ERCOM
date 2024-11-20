<x-app-layout>
    <div class="card">
        <div class="mt-1 mr-3 ml-3 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3> Data Pemasukkan </h3>
                <button type="button"
                    class="btn btn-primary" 
                    style="width: 4.3cm; height: 1cm; border-radius: 3px;"
                    data-toggle="modal"
                    data-target="#modalTambah">
                    <strong>Tambah Pemasukkan</strong>
                </button>
                <!-- Modal Tambah Data -->
                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('pemasukkan.store') }}" method="POST">
                                @csrf
                                
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTambahLabel">Tambah Data Pemasukkan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h3 class="text-center">Form Tambah Pemasukkan</h3>
                                    <div class="container">
                                        <div>
                                            <div class="col font-weight-bold mt-3 mb-2">Tanggal</div>
                                            <div class="col">
                                                <input type="date" name="tanggal" class="form-control" placeholder="Masukkan tanggal pemasukkan" required>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col font-weight-bold mt-3 mb-2">Kategori</div>
                                            <div class="col">
                                                <select name="kategori" class="form-control" required>
                                                    <option value="" disabled selected>Pilih kategori</option>
                                                    <option value="kas">Kas</option>
                                                    <option value="dana dekanat">Dana Dekanat</option>
                                                    <option value="lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col font-weight-bold mt-3 mb-2">Nominal</div>
                                            <div class="col">
                                                <input type="text" name="nominal" class="form-control" placeholder="Masukkan nominal pemasukkan">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col font-weight-bold mt-3 mb-2">Keterangan</div>
                                            <div class="col">
                                                <input type="text" name="keterangan" class="form-control" placeholder="Masukkan keterangan pemasukkan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table id="dataPemasukkan" class="ui celled table" style="width:100%">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemasukkan as $data)
                    <tr>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->kategori }}</td>
                        <td>{{ $data->nominal}}</td>
                        <td>{{ $data->keterangan}}</td>
                        <td class="d-flex justify-content-between align-items-center" style="gap: 10px;">
                            <!-- Tombol Edit -->
                            <button type="button"
                                class="btn btn-warning justify-content-center align-items-center" 
                                style="width: 35px; height: 35px; border-radius: 10px;"
                                data-toggle="modal" 
                                data-target="#modal{{ $data->id }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        
                            <!-- Tombol Delete -->
                            <form action="{{ route('pemasukkan.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-danger justify-content-center align-items-center" 
                                    style="width: 35px; height: 35px; border-radius: 10px;" 
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <!-- Modal untuk setiap baris -->
                    <div class="modal fade" id="modal{{ $data->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Form untuk update -->
                                <form action="{{ route('pemasukkan.update', $data->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel{{ $data->id }}">Edit</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3 class="text-center">Edit Data Pemasukkan</h3>
                                        <div class="container">
                                            <div>
                                                <div class="col font-weight-bold mt-3 mb-2">Tanggal</div>
                                                <div class="col">
                                                    <input type="date" name="tanggal" class="form-control" value="{{ $data->tanggal }}">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col font-weight-bold mt-3 mb-2">Kategori</div>
                                                <div class="col">
                                                    <select name="kategori" class="form-control" required>
                                                        <option value="" disabled selected>Pilih kategori</option>
                                                        <option value="kas">Kas</option>
                                                        <option value="dana dekanat">Dana Dekanat</option>
                                                        <option value="lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col font-weight-bold mt-3 mb-2">Nominal</div>
                                                <div class="col">
                                                    <input type="text" name="nominal" class="form-control" value="{{ $data->nominal }}">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col font-weight-bold mt-3 mb-2">Keterangan</div>
                                                <div class="col">
                                                    <input type="text" name="keterangan" class="form-control" value="{{ $data->keterangan }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
            $('#dataPemasukkan').DataTable();
        });
    </script>
</x-app-layout>