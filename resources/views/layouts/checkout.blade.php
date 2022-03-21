<div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Checkout Kelas<i
                        class="uil uil-location-arrow ms-1"></i></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    <b class="d-block">
                        Konfirmasi Pendaftaran
                        <i class="uil uil-exclamation-octagon"></i>
                    </b>
                    Kelas yang sudah dibeli tidak dapat dibatalkan.
                </div>
                <p>
                    <b class="d-block">Kelas yang dibeli</b>
                    <span>{{ $course->title }}</span>
                </p>
                <p>
                    <b class="d-block">Subtotal Harga</b>
                    <b class="text-red">{{ $course->price == null ? 'Gratis' : 'Rp' . $course->price }}</b>
                </p>

                <form action="{{ route('checkout', $course->id) }}" method="POST">
                    @csrf
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-sm bg-green">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>
