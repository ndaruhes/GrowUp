@extends("layouts.app")

@section('title', 'Login | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <div class="auth-wrapper">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 auth-section-left">
                    <div class="auth-header">
                        <h1>Login <span class="text-red">G</span>row<span class="text-green">U</span>p</h1>
                        <p>Masuk dan nikmati semua fitur</p>
                        <hr>
                    </div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="form-label">Alamat E-Mail</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email') }}" placeholder="E-Mail Kamu...">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                value="{{ old('password') }}" placeholder="Password Kamu...">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group form-check d-flex align-items-center p-0">
                            <div role="button" class="red-checkbox-container border bg-light">
                                <img class="w-100 h-100 d-block d-none" src="{{ asset('images/checkbox.png') }}"
                                    alt="checkbox.png">
                                <input name="remember" type="checkbox" class="form-check-input custom-check-box d-none"
                                    id="rememberCheck">
                            </div>
                            <label class="form-check-label" for="rememberCheck">Ingat Saya</label>
                        </div>
                        <button type="submit" class="btn bg-green w-100 auth-btn">Masuk</button>
                    </form>
                    <div class="option text-center">
                        <span class="d-block text-secondary">Atau</span>

                        {{-- OPSI REGISTER --}}
                        <span>Belum punya akun?</span>
                        <a href="{{ url('/register') }}" class="text-red text-decoration-none">
                            Daftar Disini
                        </a>
                    </div>
                </div>
                <div class="col-md-6 auth-section-right text-center">
                    <img src="{{ asset('images/illustrations/auth.png') }}" alt="auth.png" class="w-75">
                </div>
            </div>
        </div>
    </div>
@endsection
