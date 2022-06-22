<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">


@include('layouts.ligthgallery')

<head>
    <title>LightGallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('assets/vendor/css_js/lightgallery.min.css')}}">

</head>

<ul id="lightgallery" class="list-unstyled row">
    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="http://127.0.0.1:8000/storage/images/galeries/5iSbO.jpg" data-src="http://127.0.0.1:8000/storage/images/galeries/5iSbO.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
        <a href="">
            <img class="img-responsive" src="http://127.0.0.1:8000/storage/images/galeries/5iSbO.jpg">
        </a>
    </li>
    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="http://127.0.0.1:8000/storage/images/galeries/5RZKd.jpeg" data-src="http://127.0.0.1:8000/storage/images/galeries/5RZKd.jpeg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
        <a href="">
            <img class="img-responsive" src="http://127.0.0.1:8000/storage/images/galeries/5RZKd.jpeg">
        </a>
    </li>
</ul>

</html>
