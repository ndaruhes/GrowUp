@extends('layouts.app')

@section('title', 'Hubungi Kami | GrowUp')

@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <div class="container my-5">
        <div class="contact-section">
            <div class="contact-container row">
                <div class="contact-information-container col-md-6 bg-green shadow-sm">
                    <div class="contact-header">
                        <h1>Contact Information</h1>
                        <p>Jangan sungkan menghubungi kami. Kami siap merespon pertanyaan maupun keluhan kamu secepatnya</p>
                    </div>
                    <div class="contact-information">
                        <div class="contact d-flex">
                            <img src="{{ asset('images/contact-icon/Location.png') }}" alt="">
                            <p>Jl. Raya Kb. Jeruk No.27, RW.9, Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
                        </div>
                        <div class="contact d-flex">
                            <img src="{{ asset('images/contact-icon/Whatsapp.png') }}" alt="">
                            <p>(021) 5345830</p>
                        </div>
                        <div class="contact d-flex">
                            <img src="{{ asset('images/contact-icon/Envelope.png') }}" alt="">
                            <p>customerservice@growup.com</p>
                        </div>
                    </div>
                    <div class="contact-social-media">
                        <div class="social-media-container bg-white">
                            <div class="app-icon">
                                <img src="{{ asset('images/contact-icon/Apps.png') }}" alt="">
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

                {{-- FORM CONTACT --}}
                <div class="contact-form-container col-md-6">
                    <form class="contact-form row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="email" class="form-control contact-input" placeholder="Contoh: Muhamad Ndaru">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Alamat E-Mail</label>
                            <input type="email" class="form-control contact-input"
                                placeholder="Contoh: muhamad.ndaru@gmail.com">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Subjek Pesan</label>
                            <input type="text" class="form-control contact-input" placeholder="Subjek Pesan...">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Pesan atau Keluhan</label>
                            <textarea rows="4" class="form-control message-textarea"
                                placeholder="Tuliskan pertanyaan atau keluhan kamu disini..."></textarea>
                        </div>
                        <div class="col-12 button-wrapper">
                            <button type="submit" class="btn bg-green w-100">
                                Kirim Pesan<i class="uil uil-message ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
