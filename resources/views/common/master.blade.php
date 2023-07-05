<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    {{-- Include Bulma CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

    {{-- Include Font Awesome CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- Include your custom CSS if needed --}}
    {{--    <link rel="stylesheet" href="{{ asset('path/to/your/custom.css') }}">--}}

    {{-- Load the default generated javascript and stylesheets --}}
    @vite([ 'resources/js/app.js', 'resources/sass/app.scss' ])

    {{-- Include Axios JavaScript --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- Include your other JavaScript files if needed --}}
    {{--    <script src="{{ asset('path/to/your/other.js') }}"></script>--}}
</head>
<body>
@include('common.navbar')

@yield('content')

@include('common.footer')

@stack('scripts') <!-- Place this line after including the common.footer -->
</body>
</html>
