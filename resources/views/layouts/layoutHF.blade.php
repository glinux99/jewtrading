<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.importHeader')
    <title>@yield('title' ?? 'Acceuil')</title>
</head>

<body>
    <div class="position-absolute col-md-10 classError" style="z-index: 1000">
        @include('layouts.error')
    </div>
    <div class="position-relative">
        <div class="">
            @yield('body' ?? 'NOT FOUND')
        </div>
    </div>
    @include('layouts.footer')
    @include('layouts.importScript')

</body>

</html>
