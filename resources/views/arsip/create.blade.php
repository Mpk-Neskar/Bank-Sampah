@include('template.header')

<div class="container mt-5">
    <h2>Form Arsip</h2>
    <form action="{{ route('arsip.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <select class="form-control" id="id_kelas" name="id_kelas" required>
                <option value="" selected disabled>Pilih Kelas</option>
                @foreach($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id_kelas }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="karung_kiloan" class="form-label">Karung Kiloan</label>
            <input type="number" class="form-control" id="karung_kiloan" name="karung_kiloan" required>
        </div>
        <div class="mb-3">
            <label for="tgl_pengiriman" class="form-label">Tanggal Pengiriman</label>
            <input type="date" class="form-control" id="tgl_pengiriman" name="tgl_pengiriman" required>
        </div>
        <div class="mb-3">
            <label for="tgl_setor" class="form-label">Tanggal Setor</label>
            <input type="date" class="form-control" id="tgl_setor" name="tgl_setor" required>
        </div>
        <div class="mb-3">
            <label for="id_pj" class="form-label">Penanggung Jawab</label>
            <select class="form-control" id="id_pj" name="id_pj" required>
                <option value="" selected disabled>Pilih Penanggung Jawab</option>
                @foreach($penanggungJawab as $pjItem)
                    <option value="{{ $pjItem->id_pj }}">{{ $pjItem->nama_siswa }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('template.footer')
