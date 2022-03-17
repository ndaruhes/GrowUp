<div class="modal fade" id="createMeet" tabindex="-1" aria-labelledby="createMeetLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createMeetLabel"><i class="uil uil-plus me-1"></i>Buat Jadwal Pertemuan
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('createSession') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Judul Materi</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    placeholder="Judul Materi..." name="title" value="{{ old('title') }}">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Materi</label>
                                <textarea rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Keterangan Materi..."
                                    name="description">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Bahan Ajar Materi</label>
                                <input type="file" class="form-control @error('resources') is-invalid @enderror"
                                    placeholder="Bahan Ajar Materi (pdf, word)" name="resources"
                                    value="{{ old('resources') }}">
                                @error('resources')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Link Pertemuan (Zoom, GMeet, Dll)</label>
                                <input type="text" class="form-control @error('meeting_link') is-invalid @enderror"
                                    placeholder="Link Pertemuan..." name="meeting_link"
                                    value="{{ old('meeting_link') }}">
                                @error('meeting_link')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pertemuan</label>
                                <input type="date" class="form-control @error('schedule') is-invalid @enderror"
                                    placeholder="Tanggal Pertemuan" name="schedule" value="{{ old('schedule') }}">
                                @error('schedule')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jam Pertemuan</label>
                                <input type="time" class="form-control @error('time') is-invalid @enderror"
                                    placeholder="Jam Pertemuan" name="time" value="{{ old('time') }}">
                                @error('time')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
