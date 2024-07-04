@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/operator">Operator</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Form --}}
    <form class="needs-validation" action="/operator/{{ $detail->id }}/edit" method="POST" novalidate>
        @csrf
        <div class="card">
            <div class="card-header">
                <b>Form operator</b>
            </div>
            <div class="card-body mt-3">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Nama Operator</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $detail->name }}"
                            placeholder="Masukkan nama operator..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan nama operator.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $detail->email }}"
                            placeholder="Masukkan email..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan email.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" name="password" value="{{ $detail->password }}"
                            placeholder="Masukkan password..." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please masukkan password.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="/operator" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
    {{-- End Form --}}
@endsection
