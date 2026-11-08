<!DOCTYPE html>
<html lang="en">
<head>
    @PwaHead
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UCC IT Department')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- top bar -->
    <header class="topbar">
        @if (!request()->routeIs('home'))
            <a href="{{ route('home') }}" class="back">&larr; Home</a>
        @endif
        <h1>@yield('heading', 'UCC IT Department')</h1>
    </header>

    <!-- page content -->
    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">
        <p>University of the Commonwealth Caribbean - Department of Information Technology</p>
        <p>I CERTIFY THAT I HAVE NOT GIVEN OR RECEIVED ANY UNAUTHORIZED ASSISTANCE ON THIS ASSIGNMENT - Tasheena Brown</p>
    </footer>

    <!-- Email FAB, opens an email to the HOD -->
    <a href="mailto:{{ config('ucc.hod_email') }}?subject={{ rawurlencode('Enquiry from the UCC IT App') }}"
       class="fab" title="Email the HOD, {{ config('ucc.hod_name') }}" aria-label="Email the HOD">&#9993;</a>

    <script src="{{ asset('js/app.js') }}"></script>
    @RegisterServiceWorkerScript
</body>
</html>
