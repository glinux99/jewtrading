<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css_js/css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icons/font/bootstrap-icons.css')}}">
    <title>@yield('title' ?? 'Acceuil')</title>
</head>

<body class="adminBody">
    @yield('body' ?? 'NOT FOUND')
    @include('layouts.footer')
    @if ($parentIndex ?? '')
    <script>
        var nav = document.getElementById('nav');
        if (window.scrollY == 0) {
            nav.classList.remove('bg-danger');
        }
    </script>
    @endif
    <script src="{{asset('assets/vendor/dist/js/bootstrap.bundle.min.js')}}">
    </script>
</body>

</html>
