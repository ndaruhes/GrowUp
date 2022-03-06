@extends('layouts.app')

@section('title', 'Home | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- HEADER --}}
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image-left text-center">
                    <img src="{{ asset('images/hero.png') }}" class="w-75" alt="hero.png">
                </div>
                <div class="col-md-6 text">
                    <div>
                        <span>Hello There, Welcome 👋</span>
                        <h1>A New Different Way to Improve Your Skills</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl faucibus viverra bibendum sed.
                            Ipsum mauris est, semper tincidunt.</p>
                        <button class="btn bg-green btn-started">Get Started</button>
                    </div>
                </div>
                <div class="col-md-6 image-right text-center">
                    <img src="{{ asset('images/hero.png') }}" class="w-75" alt="hero.png">
                </div>
            </div>
        </div>
    </div>

    {{-- PARTNERS --}}
    <div class="partners">
        <div class="container">
            <h2>In Collaboration With</h2>
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
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 image text-center">
                    <img src="{{ asset('images/about.png') }}" alt="about.png" class="w-75">
                </div>
                <div class="col-md-6 text">
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
    @include('components.home.courses')
@endsection
