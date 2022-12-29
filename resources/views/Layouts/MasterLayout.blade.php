<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Flaticon CSS-->
    <link rel="stylesheet" href="css/font/flaticon.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Switch style CSS -->
    <link rel="stylesheet" href="css/switch-style.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        @include('Layouts.header')
        <!-- Header Area End Here -->
      
        @yield('page_contents')

        <!-- Footer Area Start Here -->
       @include('Layouts.footer')
        <!-- Footer Area End Here -->
    </div>
    <!-- Style Switch Start Here -->
    {{-- <link id="switch_style" href="#" rel="stylesheet" type="text/css">
    <div class="style-switch left" id="switch-style">
        <a id="toggle-switcher" class="switch-button" title="Change Styles">
            <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
        </a>
        <div class="switched-options">
            <div class="config-title">Style Switcher</div>
            <ul class="list-unstyled styles">
                <li>
                    <a href="#" title="black" class="black color" id="black"></a>
                </li>
                <li>
                    <a href="#" title="amber" class="amber color" id="amber"> </a>
                </li>
                <li>
                    <a href="#" title="blue-grey" class="blue-grey color" id="blue-grey"> </a>
                </li>
                <li>
                    <a href="#" title="blue" class="blue color" id="blue"> </a>
                </li>
                <li>
                    <a href="#" title="cyan" class="cyan color" id="cyan"> </a>
                </li>
                <li>
                    <a href="#" title="deep orange" class="deep-orange color" id="deep-orange"> </a>
                </li>
                <li>
                    <a href="#" title="deep-purle" class="deep-purle color" id="deep-purle"> </a>
                </li>
                <li>
                    <a href="#" title="green" class="green color" id="green"> </a>
                </li>
                <li>
                    <a href="#" title="indigo" class="indigo color" id="indigo"> </a>
                </li>
                <li>
                    <a href="#" title="light-blue" class="light-blue color" id="light-blue"> </a>
                </li>
                <li>
                    <a href="#" title="light-green" class="light-green color" id="light-green"></a>
                </li>
                <li>
                    <a href="#" title="lime" class="lime color" id="lime"></a>
                </li>
                <li>
                    <a href="#" title="orange" class="orange color" id="orange"></a>
                </li>
                <li>
                    <a href="#" title="palette" class="palette color" id="palette"></a>
                </li>
                <li>
                    <a href="#" title="pink" class="pink color" id="pink"></a>
                </li>
                <li>
                    <a href="#" title="purple" class="purple color" id="purple"></a>
                </li>
                <li>
                    <a href="#" title="red" class="red color" id="red"></a>
                </li>
                <li>
                    <a href="#" title="teal" class="teal color" id="teal"></a>
                </li>
            </ul>
        </div>
    </div> --}}
    <!-- Style Switch End Here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- Select 2 js -->
    <script src="js/select2.min.js" type="text/javascript"></script>
    <!-- Switch style js -->
    <script src="js/switch-style.js" type="text/javascript"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js" type="text/javascript"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgREM8KO8hjfbOC0R_btBhQsEQsnpzFGQ"></script>
    <!-- CounterUp js -->
    <script src="js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <!-- Modernizr js -->
    <script src="js/modernizr-2.8.3.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="js/main.js" type="text/javascript"></script>
</body>


</html>
