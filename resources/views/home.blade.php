@extends('layouts.app')

@section('title', 'Home - UCC IT Department')
@section('heading', 'UCC IT Department')

@section('content')
    <p class="intro">Welcome! Choose an option below to get started.</p>

    <div class="menu">
        <a href="{{ route('directory') }}" class="menu-card">
            <span class="icon">&#128100;</span>
            <span class="label">Staff Directory</span>
        </a>

        <a href="{{ route('courses') }}" class="menu-card">
            <span class="icon">&#128218;</span>
            <span class="label">Courses</span>
        </a>

        <a href="{{ route('admissions') }}" class="menu-card">
            <span class="icon">&#127891;</span>
            <span class="label">Admissions</span>
        </a>

        <a href="{{ route('social') }}" class="menu-card">
            <span class="icon">&#128172;</span>
            <span class="label">Social Media</span>
        </a>
    </div>

    <p class="note">Tap the envelope button at the bottom right to email the Head of Department.</p>
@endsection
