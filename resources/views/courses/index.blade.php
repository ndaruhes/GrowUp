@extends('layouts.dashboard')

@section('title', 'Courses | GrowUp')

@section('dashboard_content')
    {{-- ADD COURSE MODAL --}}
    @include('courses.create')

    {{-- TITLE --}}
    <div class="section-title">
        <h1>
            <i class="uil uil-notebooks"></i>
            My Courses
        </h1>
        <div class="line"></div>
        <button class="btn btn-dark btn-sm add-btn" data-bs-toggle="modal" data-bs-target="#addModal">Create Course<i
                class="uil uil-plus ms-1"></i></button>
    </div>

    {{-- CONTENT --}}
    @if ($courses->count() != 0)
        <div class="table-wrapper bg-light">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="th-25">Cover</th>
                        <th class="th-30">Title</th>
                        <th class="th-30">Description</th>
                        <th class="th-15 text-center">Action</th>
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
                                    <small class="badge bg-green-gradient"><i class="uil uil-rocket me-1"></i>Free</small>
                                @else
                                    <small class="badge bg-green-gradient">Rp{{ number_format($course->price) }}</small>
                                @endif
                            </td>
                            <td>{{ substr($course->description, 0, 50) . '...' }}</td>
                            <td class="action-btn-table">
                                <a href="{{ route('showCourse', $course->id) }}" class="text-dark"><i
                                        class="uil uil-eye"></i></a>
                                <a href="{{ route('editCourse', $course->id) }}" class="text-primary mx-1"><i
                                        class="uil uil-edit"></i></a>
                                <a href="#" data-uri="{{ route('deleteCourse', $course->id) }}" class="text-danger"
                                    data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"><i
                                        class="uil uil-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-warning">You haven't held any courses yet</div>
    @endif
@endsection
