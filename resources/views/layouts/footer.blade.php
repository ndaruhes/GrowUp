{{-- <div class="footer mt-5">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 170.7 1440 149.3">
        <path fill="#F8F9FA" fill-opacity="1"
            d="M0,256L48,245.3C96,235,192,213,288,213.3C384,213,480,235,576,224C672,213,768,171,864,170.7C960,171,1056,213,1152,229.3C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</div> --}}

<div class="container">
    <footer>
    <div class="row justify-content-between">
        <div class="col footer-header-wrapper">
        <h5 class="text-green footer-header">GrowUp</h5>
        <p>A New Different Way to Improve Your Skills</p>
        </div>

        <div class="col">
        <h5>Quick Links</h5>
        <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="p-0 text-muted text-decoration-none">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="p-0 text-muted text-decoration-none">About</a></li>
            <li class="nav-item mb-2"><a href="#" class="p-0 text-muted text-decoration-none">Course</a></li>
            <li class="nav-item mb-2"><a href="#" class="p-0 text-muted text-decoration-none">Contact</a></li>
        </ul>
        </div>

        <div class="col">
        <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
            <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn bg-green d-flex justify-content-center align-items-center" type="button"><img class="send-icon" src="{{ asset('images/footer-icon/paper-plane.png') }}" alt=""></button>
            </div>
        </form>
        </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top footer-end">
        <p>© 2022 GrowUp. All rights reserved.</p>
        <div class="footer-social-media-wrapper">
            <img src="{{ asset('images/footer-icon/facebook.png') }}" alt="">
            <img src="{{ asset('images/footer-icon/twitter.png') }}" alt="">
            <img src="{{ asset('images/footer-icon/instagram.png') }}" alt="">
            <img src="{{ asset('images/footer-icon/linkedin.png') }}" alt="">
        </div>
    </div>
    </footer>
</div>
