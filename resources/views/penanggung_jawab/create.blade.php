@include('template.header')

<div class="container mt-5">
    <h2>Form Penanggung Jawab</h2>
    <form action="{{ route('penanggung-jawab.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_siswa" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-control" id="id_kelas" name="id_kelas" required>
                <option value="" selected disabled>Pilih Kelas</option>
                @foreach($kelases as $kelas)
                    <option value="{{ $kelas->id_kelas }}">{{ $kelas->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('template.footer')
