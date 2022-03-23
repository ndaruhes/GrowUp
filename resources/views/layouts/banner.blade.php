<div class="container bg-light banner">
    <h1>Halo {{ Auth::user()->name }} 👋</h1>
    <p class="mb-4">
        @if (Auth::user()->role == 'Mentor')
            Yuk kelola course kamu terlebih dahulu, course yang dikelola dan ditata dengan baik dapat meningkatkan
            ketertarikan loh. Semoga bermanfaat :D
        @else
            Terus belajar kembangkan keterampilanmu dan tetap semangat. Semoga harimu menyenangkan :D
        @endif
    </p>
    <a href="{{ url('/') }}" class="btn bg-red text-white">
        <i class="uil uil-estate me-1"></i>Kembali Ke Beranda
    </a>
</div>
