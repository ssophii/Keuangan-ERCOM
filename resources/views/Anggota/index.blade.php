<x-app-layout>
    <h3> Data Anggota </h3>
    <table id="dataAnggota" class="ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Bidang</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
            </tr>
        </tbody>
    </table>
      {{-- datatables --}}
    <script>
        $(document).ready(function() {
            $('#dataAnggota').DataTable();
        });
    </script>
</x-app-layout>