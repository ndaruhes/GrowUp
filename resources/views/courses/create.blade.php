<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel"><i class="uil uil-plus me-1"></i>Buat Kelas Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    ref="modalClose"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createCourse') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="file" name="cover" class="d-none" id="cover">
                                <label for="cover">
                                    <img src="{{ asset('images/upload-file.png') }}" alt="upload-file.png"
                                        class="w-100 rounded shadow-sm cursor-pointer" id="cover-preview">
                                </label>
                                <button type="button" class="btn bg-red btn-sm mt-3 shadow-sm d-none"
                                    id="changeCover">Ganti Sampul <i class="uil uil-image-upload ms-1"></i></button>
                                @error('cover')
                                    <small class=" text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <select class="form-select @error('category') is-invalid @enderror" id="category"
                                        aria-label="Kategori Kelas" name="category">
                                        <option selected>Kategori Kelas</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="category">Kategori Kelas</label>
                                </div>
                                @error('category')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-7">
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
                                <label>Judul Kelas</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Judul Kelas..." name="title" value="{{ old('title') }}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label>Harga Kelas <small class="text-warning">*tidak wajib</small></label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="price">Rp</span>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            placeholder="Harga Kelas..." name="price" value="{{ old('price') }}"
                                            min="1">
                                    </div>
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>Maksimal Mentee</label>
                                    <input type="number" class="form-control @error('max_mentee') is-invalid @enderror"
                                        placeholder="Maksimal Peserta..." name="max_mentee"
                                        value="{{ old('max_mentee') }}" min="3">
                                    @error('max_mentee')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>Tanggal Mulai Kelas</label>
                                    <input type="date" class="form-control @error('started_at') is-invalid @enderror"
                                        placeholder="Tanggal Mulai Kelas..." name="started_at"
                                        value="{{ old('started_at') }}">
                                    @error('started_at')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label>Tanggal Berakhir Kelas</label>
                                    <input type="date" class="form-control @error('ended_at') is-invalid @enderror"
                                        placeholder="Tanggal Berakhir Kelas..." name="ended_at"
                                        value="{{ old('ended_at') }}">
                                    @error('ended_at')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Kelas</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="4"
                                    placeholder="Masukkan Deskripsi Kelas..."
                                    name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm d-flex">
                                Simpan
                            </button>
                        </div>
                    </div>
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
