@include('template.header')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Bank Sampah - Arsip</h2>
            <a href="{{ route('arsip.create') }}" class="btn btn-primary">Tambah Arsip</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Kelas</th>
                        <th scope="col">Karung Kiloan</th>
                        <th scope="col">Tanggal Pengiriman</th>
                        <th scope="col">Tanggal Setor</th>
                        <th scope="col">Penanggung Jawab</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through your data to populate the table rows -->
                    @foreach($arsip as $arsipItem)
                        <tr>
                            <td>{{ $arsipItem->kelas->nama_kelas }}</td>
                            <td>{{ $arsipItem->karung_kiloan }}</td>
                            <td>{{ $arsipItem->tgl_pengiriman }}</td>
                            <td>{{ $arsipItem->tgl_setor }}</td>
                            <td>{{ $arsipItem->penanggungJawab->nama_siswa }}</td>
                            <td>
                                <a href="{{ url('arsip/'.$arsipItem->id_arsip.'/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('arsip/'.$arsipItem->id_arsip) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('template.footer')