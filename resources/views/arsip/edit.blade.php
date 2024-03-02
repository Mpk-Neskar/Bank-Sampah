@include('template.header')

<div class="container mt-5">
    <h2>Form Arsip</h2>
    <form action="{{ route('arsip.update', ['arsip' => $arsip->id_arsip]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_kelas" class="form-label">Kelas</label>
            <select class="form-control" id="id_kelas" name="id_kelas" required>
                @foreach($kelas as $kelasItem)
                <option value="{{ $kelasItem->id_kelas }}" {{ optional($arsip->kelas)->id_kelas == $kelasItem->id_kelas ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>                
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="karung_kiloan" class="form-label">Karung Kiloan</label>
            <input type="number" class="form-control" id="karung_kiloan" name="karung_kiloan" value="{{ $arsip->karung_kiloan }}" required>
        </div>
        <div class="mb-3">
            <label for="tgl_pengiriman" class="form-label">Tanggal Pengiriman</label>
            <input type="date" class="form-control" id="tgl_pengiriman" name="tgl_pengiriman" value="{{ $arsip->tgl_pengiriman }}" required>
        </div>
        <div class="mb-3">
            <label for="tgl_setor" class="form-label">Tanggal Setor</label>
            <input type="date" class="form-control" id="tgl_setor" name="tgl_setor" value="{{ $arsip->tgl_setor }}" required>
        </div>
        <div class="mb-3">
            <label for="id_pj class="form-label">Penanggung Jawab</label>
            <select class="form-control" id="id_pj" name="id_pj" required>
                @foreach($penanggungJawab as $pjItem)
                <option value="{{ $pjItem->id_pj }}" {{ optional($arsip->penanggungJawab)->id_pj == $pjItem->id_pj ? 'selected' : '' }}>
                    {{ $pjItem->nama_siswa }}
                </option>                
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@include('template.footer')
