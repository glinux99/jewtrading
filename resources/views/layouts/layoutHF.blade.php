<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css_js/css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icons/font/bootstrap-icons.css')}}">
    <title>@yield('title' ?? 'Acceuil')</title>
</head>

<body>
    <div class="position-absolute col-md-10 classError" style="z-index: 1000">
        @include('layouts.error')
    </div>
    <div class="position-relative">
        <div class="container-fluid">
            @yield('body' ?? 'NOT FOUND')
        </div>
    </div>
    @include('layouts.footer')
    @if ($parentIndex ?? '')
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $('.alert').fadeTo(10000, 0).slideUp(7000, function() {
                    $(this).remove();
                }, 5000);
            });
        })
    </script>
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
