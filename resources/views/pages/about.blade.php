@extends('layouts.app')

@section('title', 'About Us | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<header>
    <div class="container">
        <div class="row col-container justify-content-between py-5">
            <div class="col-lg-6 col-left flex-shrink-1 my-4">
                <div class="header-text-wrapper">
                    <h1>More About <b class="text-red">G</b>row <b class="text-green">U</b>p</h1>
                    <h4>Mentor Management System</h4>
                </div>
                <div class="text-content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu.
                </div>
                <div class="button-wrapper">
                    <a href="#" class="text-decoration-none">
                        <button type="submit" class="btn bg-red">
                            <p>Get Started</p>
                            <img src="{{ asset('images/about-image/arrow-icon.png') }}" alt="">
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-right d-flex align-items-center justify-content-center flex-shrink-1 flex-grow-1 my-4">
                <img src="{{ asset('images/about-image/join-card.png') }}" alt="">
            </div>
        </div>
    </div>
</header>
<section class="content-section container">
    <div class="section-header-container">
        <div class="section-wrapper text-center">
            <h3>OUR VALUES</h3>
            <hr class="bg-green">
            <h2>We Are <b class="text-red">G</b>row<b class="text-green">U</b>p</h2>
        </div>
    </div>
    <div class="card-container">
        <div class="card-wrapper">
            <img src="{{ asset('images/about-image/heart.png') }}" alt="">
            <div class="card-text">
                <h6 class="text-center">We love what we do</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptate amet, ab dolore temporibus exercitationem quaerat nostrum nobis dolorem eum.</p>
            </div>
        </div>
        <div class="card-wrapper">
            <img src="{{ asset('images/about-image/shield.png') }}" alt="">
            <div class="card-text">
                <h6 class="text-center">Integrity</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing edivt. Numquam voluptate amet, ab dolore temporibus exercitationem quaerat nostrum nobis dolorem eum.</p>
            </div>
        </div>
        <div class="card-wrapper">
            <img src="{{ asset('images/about-image/star.png') }}" alt="">
            <div class="card-text">
                <h6 class="text-center">Innovation</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing edivt. Numquam voluptate amet, ab dolore temporibus exercitationem quaerat nostrum</p>
            </div>
        </div>
    </div>
</section>
<section class="content-section container">
    <div class="section-header-container">
        <div class="section-wrapper text-center">
            <h3>OUR IMPACT</h3>
            <hr class="bg-red">
            <h2><b class="text-red">G</b>row<b class="text-green">U</b>p Impact in Indonesia</h2>
        </div>
    </div>
    <div class="card-container">
        <div class="card-wrapper">
            <img src="{{ asset('images/about-image/heart.png') }}" alt="">
            <div class="card-text">
                <h6 class="text-center">We love what we do</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptate amet, ab dolore temporibus exercitationem quaerat nostrum nobis dolorem eum.</p>
            </div>
        </div>
        <div class="card-wrapper">
            <img src="{{ asset('images/about-image/shield.png') }}" alt="">
            <div class="card-text">
                <h6 class="text-center">Integrity</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing edivt. Numquam voluptate amet, ab dolore temporibus exercitationem quaerat nostrum nobis dolorem eum.</p>
            </div>
        </div>
        <div class="card-wrapper">
            <img src="{{ asset('images/about-image/star.png') }}" alt="">
            <div class="card-text">
                <h6 class="text-center">Innovation</h6>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing edivt. Numquam voluptate amet, ab dolore temporibus exercitationem quaerat nostrum</p>
            </div>
        </div>
    </div>
</section>
@endsection
