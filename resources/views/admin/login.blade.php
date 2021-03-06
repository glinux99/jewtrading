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
    <form action="/connect" method="post">
        @csrf
        <div class="col-md-5 card shadow px-4 mx-auto my-md-3 py-md-5">
            <div class="my-2 p-3 card shadow">
                <h3 class="text-center">{{__("Connection")}}</h3>
                <p class="text-center">
                    <span class="bi-person bi--6xl"></span>
                </p>
                <div class="mx-2">
                    <input type="text" class="form-control my-2 " placeholder="Username" name="email">
                    <input type="password" class="form-control " placeholder="******************" name="psswd">
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-danger">{{__("connection")}}</button>
                </div>
            </div>
        </div>
    </form>
    @include('layouts.footer')
</body>

</html>
