@extends('layouts.dashboard')

@php $user = Auth::user(); @endphp
@section('title', 'Forum | GrowUp')
@section('cssExternal')
    <link rel="stylesheet" href="{{ asset('css/forum.css') }}">
@endsection


@section('dashboard_content')
    {{-- TITLE --}}
    <div class="section-title">
    <h1>
        <i class="uil uil-notebooks"></i>
        Daftar Kelas
    </h1>
    <div class="line"></div>

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
                        @if ($user->role == 'Mentor')
                            <tr>
                                <td class="fw-bold">{{ $loop->iteration }}</td>
                                <td>
                                    @if (explode('/', $course->cover)[0] != 'https:')
                                        <img src="{{ $course->cover != null ? asset('storage/images/cover/' . $course->cover) : asset('images/no-image.png') }}"
                                            alt="{{ $course->title }}" class="rounded shadow-sm w-100">
                                    @else
                                        <img src="{{ $course->cover }}" alt="{{ $course->title }}"
                                            class="rounded shadow w-100">
                                    @endif
                                </td>
                                <td>
                                    <span class="d-block">{{ substr($course->title, 0, 35) . '...' }}</span>
                                    <small class="badge bg-green">
                                        {{ $course->price == null ? 'Gratis' : 'Rp' . number_format($course->price) }}
                                    </small>
                                    <small class="badge bg-red">
                                        {{ $course->category->title }}
                                    </small>
                                </td>
                                <td>
                                    <span class="d-block">{{ substr($course->description, 0, 40) . '...' }}</span>
                                    <small class="badge bg-green">
                                        <i class="uil uil-users-alt me-1"></i> {{ $course->transaction->count() }} /
                                        {{ $course->max_mentee }}
                                    </small>
                                </td>
                                <td class="action-btn-table">
                                    <a href="{{ route('showForum', $course->id) }}" class="text-dark"><i
                                            class="uil uil-eye"></i></a>
                                    @if ($user->role == 'Mentor')
                                        <a href="{{ route('editCourse', $course->id) }}" class="text-primary mx-1"><i
                                                class="uil uil-edit"></i></a>
                                        <a href="#" data-uri="{{ route('deleteCourse', $course->id) }}"
                                            class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal"><i class="uil uil-trash-alt"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td class="fw-bold">{{ $loop->iteration }}</td>
                                <td>
                                    @if (explode('/', $course->course->cover)[0] != 'https:')
                                        <img src="{{ $course->course->cover != null? asset('storage/images/cover/' . $course->course->cover): asset('images/no-image.png') }}"
                                            alt="{{ $course->course->title }}" class="rounded shadow-sm w-100">
                                    @else
                                        <img src="{{ $course->course->cover }}" alt="{{ $course->course->title }}"
                                            class="rounded shadow w-100">
                                    @endif
                                </td>
                                <td>
                                    <span
                                        class="d-block">{{ substr($course->course->title, 0, 35) . '...' }}</span>
                                    <small class="badge bg-green">
                                        {{ $course->price == null ? 'Gratis' : 'Rp' . number_format($course->price) }}
                                    </small>
                                    <small class="badge bg-red">
                                        {{ $course->course->category->title }}
                                    </small>
                                </td>
                                <td>
                                    <span
                                        class="d-block">{{ substr($course->course->description, 0, 40) . '...' }}</span>
                                    <small class="badge bg-green">
                                        <i class="uil uil-users-alt me-1"></i>
                                        {{ $course->course->transaction->count() }} /
                                        {{ $course->course->max_mentee }}
                                    </small>
                                </td>
                                <td class="action-btn-table">
                                    @if ($user->role == 'Mentor')
                                        <a href="{{ route('detailCourse', $course->course->id) }}"
                                            class="text-dark"><i class="uil uil-eye"></i></a>
                                        <a href="{{ route('editCourse', $course->id) }}" class="text-primary mx-1"><i
                                                class="uil uil-edit"></i></a>
                                        <a href="#" data-uri="{{ route('deleteCourse', $course->id) }}"
                                            class="text-danger" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal"><i class="uil uil-trash-alt"></i></a>
                                    @else
                                        <a href="{{ route('forumDetail', $course->course->id) }}"
                                            class="badge bg-dark text-decoration-none">
                                            <i class="uil uil-eye me-1"></i>Lihat
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning">
            {{ $user->role == 'Mentor' ? 'Kamu belum memiliki kelas apapun' : 'Kamu belum mengikuti kelas apapun' }}
        </div>
    @endif
@endsection
