@include('template.header')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Edit Penanggung Jawab</h2>
            <form action="{{ route('penanggung-jawab.update', ['penanggung_jawab' => $penanggungJawab->id_pj]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $penanggungJawab->nama_siswa }}" required>
                </div>
                <div class="mb-3">
                    <label for="id_kelas" class="form-label">Kelas</label>
                    <select class="form-control" id="id_kelas" name="id_kelas" required>
                        @foreach($kelases as $kelas)
                            <option value="{{ $kelas->id_kelas }}" {{ $penanggungJawab->kelas->id_kelas == $kelas->id_kelas ? 'selected' : '' }}>
                                {{ $kelas->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $penanggungJawab->no_telp }}" required>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('penanggung-jawab.index') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>

@include('template.footer')
