@extends("layouts.app")

@section('title', 'Login | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    @include('layouts.navbar')
    <div class="auth-section-container">
        <div class="row h-100">
            {{-- LEFT SECTION (FORM) --}}
            <div class="col h-100 auth-section">
                {{-- HEADER --}}
                <div class="header-wrapper">
                    <h1>Sign In to Your</h1>
                    <h1>Account</h1>
                </div>

                <div class="form-wrapper">
                    <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail2" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check d-flex mx-2">
                            <div role="button" class="red-checkbox-container border bg-light">
                                <img class="w-100 h-100 d-block d-none" src="{{asset("images/icons/checkbox.png")}}" alt="">
                                <input name="remember" type="checkbox" class="form-check-input me-2 custom-check-box d-none" id="exampleCheck1">
                            </div>
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn bg-red w-100">Submit</button>
                    </form>
                </div>
                <div class="text-center">
                    <a class="red-text forgot-password-text text-center" href="">Forgot Password?</a>
                </div>
                <hr>
                <p class="text-center mt-5">Already have an account? <a href=""><b class="red-text">Sign in</b></a></p>
            </div>
            {{-- RIGHT SECTION (FORM) --}}
            <div class="col bg-red auth-section auth-section-right">
                <div class="image-wrapper d-flex justify-content-center">
                    <img class="auth-section-image" src="{{asset("images/3dimages/Vectary texture.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script src="{{asset("js/customCheckBox.js")}}"></script>
@endsection
