<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="author" content="insite.international">

    <link rel="shortcut icon" type="image/x-icon" href="./img">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/stick.css')}}">
    <link rel="stylesheet" href="{{asset('../css/nouislider.css')}}">

    <title>     SVANIDZE HOLDING - მთავარი</title>

</head>

<body>
    <x-navbar/>
    <x-main.auth/>
    <x-cart/>
    @yield('content')
    <x-footer/>
    <!-- third-p js-->
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <!--  jQueryUI for the extended easing options -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- regular js-->
    <script src="{{asset('../script/general.js')}}"></script>
    <script src="{{asset('../script/index.js')}}"></script>

</body>

</html>