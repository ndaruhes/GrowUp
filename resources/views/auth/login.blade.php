@extends("layouts.app")

@section('title', 'Login | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
    <div class="auth-section-container">
        <div class="row h-100">
            {{-- LEFT SECTION (FORM) --}}
            <div class="col h-100 auth-section">
                {{-- HEADER --}}
                <div class="header-wrapper">
                    <h1>Welcome to</h1>
                    <h1> <b class="red-text">G</b>row<b class="green-text">U</b>p</h1>
                </div>

                <div class="form-wrapper">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail2" class="form-label">Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check d-flex justify-content-center">
                            <div role="button" class="red-checkbox-container border bg-light">
                                <img class="w-100 h-100 d-block d-none" src="{{asset("images/icons/checkbox.png")}}" alt="">
                                <input type="checkbox" class="form-check-input me-2 custom-check-box d-none" id="exampleCheck1">
                            </div>
                            <label class="form-check-label" for="exampleCheck1">I Agree with <b class="red-text">Terms</b> and <b class="red-text">Privacy</b></label>
                        </div>
                        <button type="submit" class="btn bg-green w-100">Submit</button>
                    </form>
                </div>
                <p class="text-center mt-5">Already have an account? <a href=""><b class="red-text">Sign in</b></a></p>
            </div>
            {{-- RIGHT SECTION (FORM) --}}
            <div class="col bg-green auth-section">
                @include('layouts.authenticationNavbar')
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
