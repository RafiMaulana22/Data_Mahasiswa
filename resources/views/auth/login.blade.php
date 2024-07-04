@extends('layout.template_auth')

@section('content')
    {{-- Form --}}
    <h4 class="text-center mb-4">Login menggunakan akun anda</h4>
    <form action="/" method="POST">
        @csrf
        <div class="form-group">
            <label class="mb-1 form-label"> Email</label>
            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
        </div>
        <div class="mb-4 position-relative">
            <label class="mb-1 form-label">Password</label>
            <input type="password" id="dz-password" class="form-control" placeholder="123456" name="password">
            <span class="show-pass eye">
                <i class="fa fa-eye-slash"></i>
                <i class="fa fa-eye"></i>
            </span>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary light btn-block">Masuk</button>
        </div>
    </form>
    {{-- End Form --}}
@endsection
