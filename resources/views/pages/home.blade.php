@extends('layouts.app')

@section('title', 'Beranda | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    {{-- HEADER --}}
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5 image-left text-center" data-aos="fade-down">
                    <img src="{{ asset('images/header-asset1.png') }}" alt="header-asset1.png" class="header-asset1">
                    <img src="{{ asset('images/header-asset2.png') }}" alt="header-asset2.png" class="header-asset2">
                    <img src="{{ asset('images/illustrations/hero.png') }}" class="w-75" alt=" hero.png">
                </div>
                <div class="col-md-7 text" data-aos="fade-up">
                    <div>
                        <span id="slogan"></span>
                        <h1>Kembangkan Skill Anda Bersama Mentor Berpengalaman</h1>
                        <p>
                            <b>GrowUp</b> mempunyai cara baru yang berbeda untuk meningkatkan
                            skill Anda. Ayo gabung dan tumbuh bersama kami.
                        </p>
                        <a href="#about" class="btn bg-green btn-started me-2">Yukk, Gas Eksplor</a>
                    </div>
                </div>
                <div class="col-md-5 image-right text-center" data-aos="fade-down">
                    <img src="{{ asset('images/header-asset1.png') }}" alt="header-asset1.png" class="header-asset1">
                    <img src="{{ asset('images/header-asset2.png') }}" alt="header-asset2.png" class="header-asset2">
                    <img src="{{ asset('images/illustrations/hero.png') }}" class="w-100" alt="hero.png">
                </div>
            </div>
        </div>
    </div>

    {{-- PARTNERS --}}
    <div class="partners" data-aos="fade-up">
        <div class="content">
            <h2>Berkolaborasi Dengan</h2>
            <div class="row justify-content-between align-items-between">
                <div class="col-md-2 col-3 item">
                    <img src="{{ asset('images/partners/ruangguru.png') }}" alt="ruangguru" class="w-100">
                </div>
                <div class="col-md-4 col-4 item">
                    <img src="{{ asset('images/partners/goacademy.png') }}" alt="goacademy" class="w-100">
                </div>
                <div class="col-md-3 col-4 item">
                    <img src="{{ asset('images/partners/coursera.png') }}" alt="coursera" class="w-100">
                </div>
            </div>
        </div>
    </div>

    {{-- ABOUT --}}
    <div class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image text-center" data-aos="fade-up">
                    <img src="{{ asset('images/illustrations/about.png') }}" alt="about.png" class="w-75">
                </div>
                <div class="col-md-6 text" data-aos="fade-down">
                    <div>
                        <h2>About GrowUp</h2>
                        <span>Our Story</span>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p>It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- COURSES --}}
    <div class="courses">
        <div class="container">
            <div class="courses-header" data-aos="fade-down">
                <div class="text-center">
                    <h2>Eksplor Kelas</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl faucibus viverra bibendum sed. Ipsum
                        mauris est, semper tincidunt.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4 col-6 item">
                        <a href="{{ route('courseCategory', $category->id) }}" class="col-md-12 item-content">
                            <div class="row">
                                <div class="col-md-3 col-4 image">
                                    <img src="{{ $category->icon }}" alt="{{ $category->title }}">
                                </div>
                                <div class="col-md-9 col-8 text">
                                    {{ $category->title }}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="text-center">
                    <a href="{{ url('/explore') }}" class="btn bg-red btn-explore">Lihat Semua Kelas <i
                            class="uil uil-rocket ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('jsExternal')
    <script src="{{ asset('js/typed.js') }}"></script>
@endsection
