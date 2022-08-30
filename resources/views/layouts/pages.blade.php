<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.header')
    <title>@yield('title' ?? 'Acceuil')</title>
</head>

<body>
    <div class="position-relative">
        <div class="">
            @yield('contenu' ?? 'NOT FOUND')
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.script')
</body>
<!-- END ADMIN SCRIPT -->
<script>
    var nav = document.getElementById('nav');
    if (window.scrollY == 0) {
        nav.classList.remove('bg-danger');
    }
</script>
<!-- END SCRIPT LAYER -->

</html>
