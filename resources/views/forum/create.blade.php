<div class="modal fade" id="createForum" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel"><i class="uil uil-plus me-1"></i>Buat Forum Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    ref="modalClose"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createForum') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row align-items-center">
                            <div class="col-md-2 col-3">
                                <img src="{{ asset('/images/avatar.png') }}" alt="avatar.png"
                                    class="w-100 shadow-sm rounded-circle">
                            </div>
                            <div class="col-md-10 col-9 p-0 modal-user-info">
                                <span>{{ Auth::user()->name }}</span>
                                <small class="badge bg-green">{{ Auth::user()->role }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Judul Forum</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            placeholder="Judul Forum..." name="title" value="{{ old('title') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm d-flex">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@section('jsExternal')
    <script>
        let cover = document.getElementById('cover')
        let coverPreview = document.getElementById('cover-preview')
        let changeCover = document.getElementById('changeCover')
        cover.onchange = (e) => {
            const [file] = cover.files
            if (file) {
                coverPreview.src = URL.createObjectURL(file)
                changeCover.classList.remove('d-none')
            }
        }

        changeCover.onclick = () => cover.click()
    </script>
@endsection
