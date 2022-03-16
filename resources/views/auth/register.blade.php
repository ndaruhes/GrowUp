@extends("layouts.app")

@section('title', 'Register | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="auth-section-container">
        <div class="row h-100">
            {{-- LEFT SECTION (FORM) --}}
            <div class="col auth-section auth-section-left">
                <div class="header-wrapper">
                    <h1>Welcome to</h1>
                    <h1> <b class="red-text">G</b>row<b class="green-text">U</b>p</h1>
                </div>

                <div class="form-wrapper">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name">
                            @error('name')
                                <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email">
                            @error('email')
                                <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="password">
                            @error('password')
                                <small class=" text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3 form-check d-flex mx-2">
                            <div role="button" class="red-checkbox-container border bg-light flex-shrink-0">
                                <img class="w-100 h-100 d-block d-none" src="{{ asset('images/icons/checkbox.png') }}"
                                    alt="">
                                <input type="checkbox" class="form-check-input me-2 custom-check-box d-none"
                                    id="agreementCheck">
                            </div>
                            <label class="form-check-label" for="agreementCheck">I Agree with <b
                                    class="red-text">Terms</b> and <b class="red-text">Privacy</b></label>
                        </div>
                        <button type="submit" class="btn bg-green w-100">Submit</button>
                    </form>
                </div>
                <p class="text-center mt-5">Already have an account? <a href=""><b class="red-text">Sign in</b></a>
                </p>
            </div>

            {{-- RIGHT SECTION (FORM) --}}
            <div class="col bg-green auth-section auth-section-right">
                <div class="image-wrapper d-flex justify-content-center">
                    <img class="auth-section-image" src="{{ asset('images/3dimages/auth.png') }}" alt="auth.png">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/customCheckBox.js') }}"></script>
@endsection
