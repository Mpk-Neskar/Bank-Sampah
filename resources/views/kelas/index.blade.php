@include('template.header')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Bank Sampah - Daftar Kelas</h2>
            <a href="{{ route('kelas.create') }}" class="btn btn-primary">Tambah Kelas</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Kompetensi Keahlian</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through your data to populate the table rows -->
                    @foreach($kelas as $kelasItem)
                    <tr>
                        <td>{{ $kelasItem->nama_kelas }}</td>
                        <td>{{ $kelasItem->kompetensi_keahlian }}</td>
                        <td>
                            <a href="{{ url('kelas/'.$kelasItem->id_kelas.'/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('kelas/'.$kelasItem->id_kelas) }}" method="POST" style="display: inline;">
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