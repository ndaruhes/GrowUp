@extends("layouts.app")

@section('title', 'Daftar Mentor | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <div class="auth-wrapper">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 auth-section-left">
                    <div class="auth-header">
                        <h1>Register Mentor <span class="text-red">G</span>row<span class="text-green">U</span>p
                        </h1>
                        <p>Bergabung dan mulai karirmu dengan daftar sebagai mentor di <b>GrowUp</b></p>
                        <hr>
                    </div>
                    <form action="{{ route('storeMentor') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                value="{{ old('name') }}" placeholder="Nama Lengkap Kamu...">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
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
                                class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password Kamu...">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input name="password_confirmation" type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Konfirmasi Password Kamu...">
                            @error('password_confirmation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group form-check d-flex align-items-center p-0">
                            <div role="button" class="red-checkbox-container border bg-light">
                                <img class="w-100 h-100 d-block d-none" src="{{ asset('images/checkbox.png') }}"
                                    alt="checkbox.png">
                                <input name="termsPrivacy" type="checkbox"
                                    class="form-check-input custom-check-box d-none" id="termsPrivacyCheck">
                            </div>
                            <label class="form-check-label" for="termsPrivacyCheck">
                                Saya Setuju dengan <a href="#" class="text-decoration-none">Persyaratan & Privasi</a>
                            </label>
                        </div>
                        <button type="submit" class="btn bg-green w-100 auth-btn">Daftar</button>
                    </form>
                    <div class="option text-center">
                        <span class="d-block text-secondary">Atau</span>

                        {{-- OPSI LOGIN --}}
                        <span>Sudah punya akun?</span>
                        <a href="{{ url('/login') }}" class="text-red text-decoration-none">
                            Login Disini
                        </a>
                    </div>
                </div>
                <div class="col-md-6 auth-section-right text-center">
                    <img src="{{ asset('images/illustrations/mentor.png') }}" alt="auth.png" class="w-75">
                </div>
            </div>
        </div>
    </div>
@endsection
