@extends('layouts.app')

@section('title', 'Explore Courses | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <div class="container wrapper my-5">
        <div class="container">
            <div class="contact-section">
                <div class="contact-container row">
                    <div class="contact-information-container col-md-6 bg-green">
                        <div class="contact-header">
                            <h1>Contact Information</h1>
                            <p>Please feel free to contact us and we will get back to you as soon as possible</p>
                        </div>
                        <div class="contact-information">
                            <div class="contact d-flex">
                                <img src="{{ asset('images/contact-icon/Location.png') }}" alt="">
                                <p>Jl. Place Holder No. 153, Jakarta Barat</p>
                            </div>
                            <div class="contact d-flex">
                                <img src="{{ asset('images/contact-icon/Whatsapp.png') }}" alt="">
                                <p>+62 8924 42491 2423</p>
                            </div>
                            <div class="contact d-flex">
                                <img src="{{ asset('images/contact-icon/Envelope.png') }}" alt="">
                                <p>placeholder@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact-social-media">
                            <div class="social-media-container bg-white">
                                <div class="app-icon">
                                    <img src="{{ asset('images/icons/Apps.png') }}" alt="">
                                </div>
                                <div class="social-media-icon">
                                    <a href="">
                                        <img src="{{ asset('images/social-media-icon/Instagram.png') }}" alt="">
                                    </a>
                                    <a href="">
                                        <img src="{{ asset('images/social-media-icon/Facebook.png') }}" alt="">
                                    </a>
                                    <a href="">
                                        <img src="{{ asset('images/social-media-icon/Twitter.png') }}" alt="">
                                    </a>
                                    <a href="">
                                        <img src="{{ asset('images/social-media-icon/Linkedin.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form-container col-md-6">
                        {{-- FORM CONTACT --}}
                        <form class="contact-form row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Full Name</label>
                                <input type="email" class="form-control contact-input" id="inputEmail4" placeholder="e.g John Son">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" class="form-control contact-input" id="inputPassword4" placeholder="e.g placeholder@gmail.com">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Subject</label>
                                <input type="text" class="form-control contact-input" id="inputAddress" placeholder="e.x Important Message">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control message-textarea" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                                    <label for="floatingTextarea2">My Message</label>
                                </div>
                            </div>
                            <div class="col-12 button-wrapper">
                                <button type="submit" class="btn btn-primary bg-green w-100">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
@endsection
