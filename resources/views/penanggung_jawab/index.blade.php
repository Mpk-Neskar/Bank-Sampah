@include('template.header')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Bank Sampah - Daftar Pj</h2>
            <a href="{{ route('penanggung-jawab.create') }}" class="btn btn-primary">Tambah Pj</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Penanggung Jawab</th>
                        <th scope="col">Nama Kelas</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop through your data to populate the table rows -->
                    @foreach($penanggungJawab as $pj)
                        <tr>
                            <td>{{ $pj->nama_siswa }}</td>
                            <td>{{ $pj->kelas->nama_kelas }}</td>
                            <td>{{ $pj->no_telp }}</td>
                            <td>
                                <a href="{{ url('penanggung-jawab/'.$pj->id_pj.'/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('penanggung-jawab/'.$pj->id_pj) }}" method="POST" style="display: inline;">
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