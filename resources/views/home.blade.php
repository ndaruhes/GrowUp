@extends('layouts.app')

@section('content')
    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- CONTENT --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <form action="{{route('createCourse')}}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama</label>
                <input name="course_name" type="text" class="form-control" id="inputEmail4">
            </div>
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option  selected>Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select>
            <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#COURSE_ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Mentor ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody>

                    @foreach (Auth::user()->courses as $course)
                        <tr>
                            <th scope="row">{{$course->id}}</th>
                            <td>{{$course->course_name}}</td>
                            <td>{{Auth::user()->name}}</td>
                            <td>{{$course->category()->first()->category_name}}</td>
                            <td>
                                <form method="POST" action="{{route('deleteCourse', $course->id)}}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-primary" type="submit">Delete</button>
                                </form>
                            </td>
                            <td><button class="btn btn-primary" type="submit"><a href="{{route('updateCourse',$course->id)}}">Update</a></button></td>

                        </tr>
                    @endforeach

            </tbody>
            </table>
    </div>
@endsection
