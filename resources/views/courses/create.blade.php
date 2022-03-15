<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel"><i class="uil uil-plus me-1"></i>Create Course</h5>
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
                                    id="changeCover">Change Cover <i class="uil uil-image-upload ms-1"></i></button>
                                @error('cover')
                                    <small class=" text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <select class="form-select @error('category') is-invalid @enderror" id="category"
                                        aria-label="Course Category" name="category">
                                        <option selected>Course Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    <label for="category">Course Category</label>
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
                                        <small class="badge bg-green-gradient">{{ Auth::user()->role }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Course Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Course Title..." name="title" value="{{ old('title') }}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Price <small class="text-warning">*optional</small></label>
                                <div class="input-group">
                                    <span class="input-group-text" id="price">Rp</span>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        placeholder="Course Price..." name="price" value="{{ old('price') }}"
                                        min="1">
                                </div>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Course Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" rows="4"
                                    placeholder="Course Description Goes Here..."
                                    name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm d-flex">
                                Submit
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
        let cover = document.getElementById('cover');
        let coverPreview = document.getElementById('cover-preview')
        let changeCover = document.getElementById('changeCover');
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
