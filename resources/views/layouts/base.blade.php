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

    <link href="favicon.ico" rel="shortcut icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/nouislider.css">

    <title> Chateau Svanidze - მთავარი</title>
    <style>
        #snow {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 1000;
        }
    </style>
</head>

<body>
<div id="snow"></div>

    <x-navbar/>
    <x-main.auth/>
    <x-cart/>
    @yield('content')
    <x-footer/>
    <!-- third-p js-->
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            var script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js';
            script.onload = function(){
                particlesJS("snow", {
                    "particles": {
                        "number": {
                            "value": 200,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#ffffff"
                        },
                        "opacity": {
                            "value": 0.7,
                            "random": false,
                            "anim": {
                                "enable": false
                            }
                        },
                        "size": {
                            "value": 5,
                            "random": true,
                            "anim": {
                                "enable": false
                            }
                        },
                        "line_linked": {
                            "enable": false
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "bottom",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                            "attract": {
                                "enable": true,
                                "rotateX": 300,
                                "rotateY": 1200
                            }
                        }
                    },
                    "interactivity": {
                        "events": {
                            "onhover": {
                                "enable": false
                            },
                            "onclick": {
                                "enable": false
                            },
                            "resize": false
                        }
                    },
                    "retina_detect": true
                });
            }
            document.head.append(script);
        });
    </script>

    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!--  jQueryUI for the extended easing options -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- regular js-->
    <script src="{{asset('../script/details.js')}}"></script>
    <script src="{{asset('../script/general.js')}}"></script>
    <script src="{{asset('../script/nouislider.min.js')}}"></script>
    <script src="{{asset('../script/products.js')}}"></script>
    <script src="{{asset('../script/index.js')}}"></script>

</body>

</html>
