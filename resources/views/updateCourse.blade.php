@extends('layouts.app')


@section('content')

    @include('layouts.navbar')
    <form action="{{route('updateCourse', $courseData->id)}}" method="POST" class="row g-3">
        @method('PATCH')
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

@endsection
