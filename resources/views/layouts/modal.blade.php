{{-- DELETE --}}
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered confirm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                <form id="confirm_delete" method="POST" action="">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- LOGIN MODAL --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel"><i class="uil uil-ninja me-1"></i>Upps Tunggu Dulu
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kamu harus login terlebih dahulu untuk bisa mengikuti kelas ini.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="{{ url('/login') }}" class="btn btn-sm bg-green">Login
                    Sekarang</a>
            </div>
        </div>
    </div>
</div>

{{-- JOIN CLASS MODAL --}}
<div class="modal fade" id="gabungKelasModal" tabindex="-1" aria-labelledby="gabungKelasModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gabungKelasModalLabel"><i class="uil uil-ninja me-1"></i>Upps Tunggu Dulu
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Kamu harus gabung kelas terlebih dahulu untuk bisa mengikuti kelas ini.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="#" class="btn btn-sm bg-green" data-bs-toggle="modal" data-bs-target="#checkoutModal">Gabung
                    Sekarang</a>
            </div>
        </div>
    </div>
</div>
