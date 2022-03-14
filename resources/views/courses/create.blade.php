    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel"><i class="uil uil-plus me-1"></i>Buat Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        ref="modalClose"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('createCourse') }}">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <img src="{{ asset('images/upload-file.png') }}" alt="upload-file.png"
                                        class="w-100 rounded shadow-sm cursor-pointer">
                                </div>
                                <div class="form-group">
                                    <div class="form-floating">
                                        <select class="form-select" id="category" aria-label="Course Category">
                                            <option selected>Course Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="category">Course Category</label>
                                    </div>
                                    <small class="text-danger"></small>
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
                                    <input type="text" class="form-control" placeholder="Course Title...">
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label>Course Price</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="price">Rp</span>
                                        <input type="number" class="form-control" placeholder="Course Price..."
                                            aria-label="Course Price" aria-describedby="price">
                                    </div>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group">
                                    <label>Course Description</label>
                                    <textarea class="form-control" rows="4" placeholder="Course Description Goes Here..."></textarea>
                                    <small class="text-danger"></small>
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
