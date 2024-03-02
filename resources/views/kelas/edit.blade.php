@include('template.header')
   
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Edit Kelas</h2>
            <form action="{{ route('kelas.update', ['kelas' => $kelas->id_kelas]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas"
                        value="{{ $kelas->nama_kelas }}" required>
                </div>
                <div class="mb-3">
                    <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                    <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian"
                        value="{{ $kelas->kompetensi_keahlian }}" required>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('kelas.index') }}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@include('template.footer')