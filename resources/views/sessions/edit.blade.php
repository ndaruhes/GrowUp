@extends('layouts.dashboard')

@section('title', 'Edit Pertemuan} | GrowUp')

@section('dashboard_content')
    {{-- TITLE --}}
    <div class="section-title">
        <h1>
            <i class="uil uil-edit"></i>
            Edit Pertemuan {{ $num }}
        </h1>
        <div class="line"></div>
    </div>

    {{-- COURSE DESCRIPTION --}}
    <div class="course-heading">
        <span class="title">{{ $session->course->title }}</span>
        <small class="badge bg-green-gradient">{{ $session->course->category->title }}</small>
        <small
            class="text-red fw-bold">{{ $session->course->price == null ? 'Gratis' : 'Rp' . number_format($session->course->price) }}</small>
        <span class="description">{{ $session->course->description }}</span>
    </div>

    {{-- FORM EDIT SESSION --}}
    <div class="session">
        <form action="{{ route('updateSession', $session->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Judul Materi</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                            placeholder="Judul Materi..." name="title"
                            value="{{ old('title') ? old('title') : $session->title }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Materi</label>
                        <textarea rows="4" class="form-control @error('description') is-invalid @enderror" placeholder="Keterangan Materi..."
                            name="description">{{ old('description') ? old('description') : $session->description }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Bahan Ajar Materi</label>
                        <input type="file" class="form-control @error('resources') is-invalid @enderror"
                            placeholder="Bahan Ajar Materi (pdf, word)" name="resources"
                            value="{{ old('resources') ? old('resources') : $session->resources }}">
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
                            value="{{ old('meeting_link') ? old('meeting_link') : $session->meeting_link }}">
                        @error('meeting_link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pertemuan</label>
                        <input type="date" class="form-control @error('schedule') is-invalid @enderror"
                            placeholder="Tanggal Pertemuan" name="schedule"
                            value="{{ old('schedule') ? old('schedule') : $session->schedule }}">
                        @error('schedule')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jam Pertemuan</label>
                        <input type="time" class="form-control @error('time') is-invalid @enderror"
                            placeholder="Jam Pertemuan" name="time"
                            value="{{ old('time') ? old('time') : $session->time }}">
                        @error('time')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
