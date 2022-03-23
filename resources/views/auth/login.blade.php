@extends("layouts.app")

@section('title', 'Login | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <div class="auth-section-container">
        <div class="row h-100">
            {{-- LEFT SECTION (FORM) --}}
            <div class="col h-100 auth-section auth-section-left">
                <div class="header-wrapper">
                    <h1 class="text-nowrap">Sign In to Your</h1>
                    <h1>Account</h1>
                </div>

                <div class="form-wrapper">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email') }}">
                            @error('email')
                                <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="password" value="{{ old('password') }}">
                            @error('password')
                                <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3 form-check d-flex mx-2">
                            <div role="button" class="red-checkbox-container border bg-light">
                                <img class="w-100 h-100 d-block d-none" src="{{ asset('images/icons/checkbox.png') }}"
                                    alt="">
                                <input name="remember" type="checkbox" class="form-check-input me-2 custom-check-box d-none"
                                    id="rememberCheck">
                            </div>
                            <label class="form-check-label" for="rememberCheck">Remember Me</label>
                        </div>
                        <button type="submit" class="btn bg-red w-100">Submit</button>
                    </form>
                </div>
                <div class="text-center">
                    <a class="red-text forgot-password-text text-center" href="">Forgot Password?</a>
                </div>
                <hr>
                <p class="text-center mt-5">Already have an account? <a href=""><b class="red-text">Sign in</b></a>
                </p>
            </div>

            {{-- RIGHT SECTION (FORM) --}}
            <div class="col bg-red auth-section auth-section-right auth-section-right">
                <div class="image-wrapper d-flex justify-content-center">
                    <img class="auth-section-image" src="{{ asset('images/3dimages/auth.png') }}" alt="auth.png">
                </div>
            </div>
        </div>
    </div>
@endsection