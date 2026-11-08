@extends('layouts.app')

@section('title', 'Courses - UCC IT Department')
@section('heading', 'Courses')

@section('content')
    <input type="text" id="courseSearch" class="search" placeholder="Search by course code or name...">

    <div class="list" id="courseList">
        @foreach ($courses as $course)
            <div class="course-card">
                <h2>{{ $course->code }} - {{ $course->name }}</h2>
                <p><strong>Credits:</strong> {{ $course->credits }}</p>
                <p><strong>Pre-requisites:</strong> {{ $course->prerequisites }}</p>
                <p>{{ $course->description }}</p>
            </div>
        @endforeach
    </div>

    <p id="noResults" class="note" style="display:none;">No courses found.</p>
@endsection
