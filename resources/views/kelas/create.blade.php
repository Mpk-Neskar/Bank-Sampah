@include('template.header')
    <div class="container mt-5">
        <h2>Form Kelas</h2>
        <form action="{{ route('kelas.store') }}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
            </div>
            <div class="mb-3">
                <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                <input type="text" class="form-control" id="kompetensi_keahlian" name="kompetensi_keahlian" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @include('template.footer')