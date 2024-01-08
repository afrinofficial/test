<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Afrin Real Estate  @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('/')}}front/img/favicon.ico" rel="icon">


   @include('frontend.includes.css')

</head>

<body>

<div class="container-xxl bg-white p-0">

{{--    @include('frontend.includes.header')--}}


@yield('body')


@include('frontend.includes.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

@include('frontend.includes.js')
</body>

</html>
