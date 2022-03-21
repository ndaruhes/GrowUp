@extends('layouts.dashboard')

@section('title', 'Kelola Kelas | GrowUp')

@section('dashboard_content')
    {{-- ADD COURSE MODAL --}}
    @if (Auth::user()->role == 'Mentor')
        @include('courses.create')
    @endif

    {{-- TITLE --}}
    <div class="section-title">
        <h1>
            <i class="uil uil-notebooks"></i>
            Daftar Kelas
        </h1>
        <div class="line"></div>
        @if (Auth::user()->role == 'Mentor')
            <button class="btn btn-dark btn-sm add-btn" data-bs-toggle="modal" data-bs-target="#addModal">Buat Kelas<i
                    class="uil uil-plus ms-1"></i></button>
        @endif
    </div>

    {{-- CONTENT --}}
    @if ($courses->count() != 0)
        <div class="table-wrapper bg-light">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="th-25">Sampul</th>
                        <th class="th-30">Nama Kelas</th>
                        <th class="th-30">Deskripsi Kelas</th>
                        <th class="th-15 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td class="fw-bold">{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ $course->cover != null ? asset('storage/images/cover/' . $course->cover) : asset('images/no-image.png') }}"
                                    alt="{{ $course->title }}" class="rounded shadow-sm w-100">
                            </td>
                            <td>
                                <span class="d-block">{{ $course->title }}</span>
                                @if ($course->price == null)
                                    <small class="badge bg-green"><i class="uil uil-rocket me-1"></i>Gratis</small>
                                @else
                                    <small class="badge bg-green">Rp{{ number_format($course->price) }}</small>
                                @endif
                            </td>
                            <td>{{ substr($course->description, 0, 50) . '...' }}</td>
                            <td class="action-btn-table">
                                <a href="{{ route('showCourse', $course->id) }}" class="text-dark"><i
                                        class="uil uil-eye"></i></a>
                                @if (Auth::user()->role == 'Mentor')
                                    <a href="{{ route('editCourse', $course->id) }}" class="text-primary mx-1"><i
                                            class="uil uil-edit"></i></a>
                                    <a href="#" data-uri="{{ route('deleteCourse', $course->id) }}" class="text-danger"
                                        data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i
                                            class="uil uil-trash-alt"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning">Kamu belum memiliki kelas apapun</div>
    @endif
@endsection
