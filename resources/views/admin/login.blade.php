<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/vendor/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/css_js/css.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/icons/font/bootstrap-icons.css')}}">
    <title>{{__("Connection")}}</title>
</head>

<body class="adminBody">
    @include('layouts.menuP')
    <div class="col-md-5 menuAdmin px-4 mx-auto my-md-5 py-md-5">
        <div class="my-3 p-3 menuAdmin">
            <h3 class="text-center">{{__("Connection")}}</h3>
            <p class="text-center">
                <span class="bi-person bi--6xl"></span>
            </p>
            <div class="mx-2">
                <input type="text" class="form-control my-2 bg-select" placeholder="Username">
                <input type="password" class="form-control bg-select" placeholder="******************">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn buttonAdd">{{__("connection")}}</button>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>

</html>
