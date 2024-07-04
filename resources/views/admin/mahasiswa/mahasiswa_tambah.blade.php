@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/mahasiswa">Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Form --}}
    <form class="needs-validation" action="/mahasiswa/tambah" method="POST" novalidate>
        @csrf
        <div class="card">
            <div class="card-header">
                <b>Form Mahasiswa</b>
            </div>
            <div class="card-body mt-3">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="nim_mahasiswa" class="form-label">Nomor Induk Mahasiswa</label>
                        <input type="text" class="form-control" id="nim_mahasiswa" name="nim_mahasiswa"
                            placeholder="Masukkan nomor induk mahasiswa..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan nomor induk mahasiswa.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                            placeholder="Masukkan nama mahasiswa..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan nama mahasiswa.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan tanggal lahir.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option selected disabled value="">Memilih...</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please pilih jenis kelamin.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="id_jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" id="id_jurusan" name="id_jurusan" required>
                            <option selected disabled value="">Memilih...</option>
                            @foreach ($jurusan as $key => $value)
                                <option value="{{ $value->id }}">{{ $value->nama_jurusan }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please pilih jenis kelamin.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="/jurusan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
    {{-- End Form --}}
@endsection
