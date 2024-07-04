@extends('layout.template')

@section('content')
    {{-- Breadcrumb --}}
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
    {{-- End Breadcrumb --}}
    {{-- Tabel --}}
    <div class="card">
        <div class="card-header">
            <b>List Operator</b>
        </div>
        <div class="card-body mt-3">
            <a href="/operator/tambah" class="btn btn-primary btn-sm mb-3">+ Tambah Data Operator</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Operator</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($operator as $key => $value)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>
                                    <a href="/operator/{{ $value->id }}/edit" class="badge bg-primary">
                                        Edit
                                    </a>
                                    <button type="submit" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $value->id }}">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <!-- Modal Hapus -->
                            <div class="modal fade" id="hapus{{ $value->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah anda yakin ingin menghapus data <b>{{ $value->name }}?</b>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="jurusan/{{ $value->id }}/hapus" class="btn btn-danger">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- End Tabel --}}
@endsection
