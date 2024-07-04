@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/jurusan">Jurusan</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Form --}}
    <form class="needs-validation" action="/jurusan/{{ $detail->id }}/edit" method="POST" novalidate>
        @csrf
        <div class="card">
            <div class="card-header">
                <b>Form Jurusan</b>
            </div>
            <div class="card-body mt-3">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label for="nama_jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" value="{{ $detail->nama_jurusan }}"
                            placeholder="Masukkan jurusan..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan jurusan.
                        </div>
                    </div>
                </div>
    </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan Data</button>
        <a href="/jurusan" class="btn btn-danger">Kembali</a>
    </div>
    </div>
    </form>
    {{-- End Form --}}
@endsection
