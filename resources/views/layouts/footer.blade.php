<div class="footer mt-5">
    <svg class="wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 170.7 1440 149.3">
        <path fill="#F8F9FA" fill-opacity="1"
            d="M0,256L48,245.3C96,235,192,213,288,213.3C384,213,480,235,576,224C672,213,768,171,864,170.7C960,171,1056,213,1152,229.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <div class="footer-container">
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-md-4 footer-item">
                        <span class="footer-logo footer-header">
                            <span class="text-red">G</span>row<span class="text-green">U</span>p
                        </span>
                        <span class="footer-subtitle">
                            Cara baru yang berbeda untuk meningkatkan skill Anda. Ayo gabung
                            dan tumbuh bersama kami.
                        </span>
                    </div>
                    <div class="col-md-2 footer-item">
                        <h5>Link Situs</h5>
                        <div class="line"></div>
                        <ul class="nav flex-column">
                            <li class="footer-link"><a href="{{ url('/') }}">Beranda</a></li>
                            <li class="footer-link"><a href="{{ url('/explore') }}">Eksplor Kelas</a></li>
                            <li class="footer-link"><a href="#">Kebijakan Privasi</a></li>
                            <li class="footer-link"><a href="#">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 footer-item">
                        <h5>Ayo Berlangganan</h5>
                        <div class="line"></div>
                        <p>Jangan sampai ketinggalan informasi dan promo menarik dari kami.</p>
                        <form>
                            <div class="d-flex w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Alamat E-Mail</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn bg-green d-flex justify-content-center align-items-center"
                                    type="button"><img class="send-icon"
                                        src="{{ asset('images/footer-icon/paper-plane.png') }}" alt=""></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 footer-item">
                        <h5>Lokasi Kami</h5>
                        <div class="line"></div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.673215681201!2d106.78244314768551!3d-6.2084278561793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sUniversitas%20Bina%20Nusantara%2C%20Kampus%20Anggrek!5e0!3m2!1sid!2sid!4v1647956969624!5m2!1sid!2sid"
                            class="w-100" height="150" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>

                <div class="py-4 mt-4 border-top footer-end">
                    <span>
                        &copy; 2022
                        <a href="{{ url('/home') }}" class="fw-bold text-decoration-none text-green">GrowUp. </a>
                        All Rights Reserved.
                    </span>
                    <div class="footer-social-media-wrapper">
                        <img src="{{ asset('images/footer-icon/facebook.png') }}" alt="">
                        <img src="{{ asset('images/footer-icon/twitter.png') }}" alt="">
                        <img src="{{ asset('images/footer-icon/instagram.png') }}" alt="">
                        <img src="{{ asset('images/footer-icon/linkedin.png') }}" alt="">
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
