<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/normalize.css">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/assets/frontend/')}}/css/responsive.css">
    <script src="{{asset('public/assets/frontend/')}}/js/modernizr-3.12.0.js"></script>
    <title>Search Page</title>
</head>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')

    <script async src="https://cse.google.com/cse.js?cx=96fd9eaa55a6d41f0"> </script>


    <script src="{{asset('public/assets/frontend/')}}/js/Jquery-3.7.0.js"></script>
    <script src="{{asset('public/assets/frontend/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/assets/frontend/')}}/js/main.js"></script>
</body>
</html>