<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}
        @if (isset($title) && !empty($title))
            | {{ $title }}
        @endif
    </title>

    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">

    @yield('style')
</head>

<body>
    <div id="app">
        <x-partials.member.sidebar />
        <div id="main">
            <x-partials.member.nav />
            @yield('content')
            <x-partials.member.footer />
        </div>
    </div>

    <script type="application/javascript" src="{{ asset('assets/js/app.js') }}"></script>

    @yield('script')
</body>

</html>
