@extends('layouts.app')

@section('title', 'Staff Directory - UCC IT Department')
@section('heading', 'Staff Directory')

@section('content')
    <div class="list">
        @foreach ($staff as $person)
            <div class="staff-card">
                <img src="{{ asset('images/staff/' . $person->photo) }}" alt="Photo of {{ $person->name }}" class="staff-photo">

                <div class="staff-info">
                    <h2>{{ $person->name }}</h2>
                    <p class="position">{{ $person->position }}</p>
                    <p>Tel: {{ $person->phone }} ext. {{ $person->extension }}</p>
                    <p>Email: {{ $person->email }}</p>

                    <div class="buttons">
                        <!-- tel: opens the phone dialer (the commas wait before dialling the extension), mailto: opens the email app -->
                        <a href="tel:+1{{ str_replace('-', '', $person->phone) }},,{{ $person->extension }}" class="btn btn-call">Call</a>
                        <a href="mailto:{{ $person->email }}" class="btn btn-email">Email</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
