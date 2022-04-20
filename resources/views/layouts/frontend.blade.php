<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#fed300" />
    <title>FSGL | Logicstic Shipping Company</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="For all kind of delivery and shipping company website">
    <meta name="keywords" content="logistic, shipping, cargo, delivery, transportation, truck, service, solutions, importing, exporting, trade, product, move, calculate, cost, ecommerce">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="FSGL | Logicstic Shipping Company">
    <meta property="og:image" content="preview">
    <meta property="og:site_name" content="FSGL">
    <meta property="og:title" content="FSGL">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.themezinho.net/FSGL">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@FSGL">
    <meta name="twitter:creator" content="@FSGL">
    <meta name="twitter:title" content="FSGL">
    <meta name="twitter:description" content="FSGL | Logicstic Shipping Company">
    <meta name="twitter:image" content="preview">

    <!-- FAVICON FILES -->
    <link href="{{ asset('public/ico/apple-touch-icon-144-precomposed.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ asset('public/ico/apple-touch-icon-114-precomposed.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('public/ico/apple-touch-icon-72-precomposed.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('public/ico/apple-touch-icon-57-precomposed.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('public/ico/favicon.png') }}" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="{{ asset('public/css/lineicons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/all.min.css') }}">
</head>

<body>
    <div class="preloader"> <img src="{{ asset('public/images/preloader.png') }}" alt="Image"> </div>
    <!-- end preloader -->
    <div class="page-transition"></div>
    <!-- end page-transition -->
    <aside class="side-widget">
        <div class="inner">
            <div class="logo"> <a href="index-2"><img src="{{ asset('public/images/logo.png') }}" srcset="{{ asset('public/images/logo@2x.png') }}" alt="Image"></a> </div>
            <!-- end logo -->
            <div class="hide-mobile">
                <p>Take the complexity out of customs Freight Solutions with customs brokerage services</p>
                <figure class="gallery"><a href="{{ asset('public/images/recent-news01.jpg') }}" data-fancybox><img src="{{ asset('public/images/recent-news01.jpg') }}" alt="Image"></a><a href="{{ asset('public/images/recent-news02.jpg') }}" data-fancybox><img src="{{ asset('public/images/recent-news02.jpg') }}" alt="Image"></a></figure>
                <h6 class="widget-title">CONTACT INFO</h6>
                <address class="address">
                    <p>+1 (850) 344 0 66<br>
                        <a href="#">sales@fsgl.co.uk
                        </a>
                    </p>
                </address>
                <h6 class="widget-title">FOLLOW US</h6>
                <ul class="social-media">
                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                    <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                    <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                </ul>
            </div>
            <!-- end hide-mobile -->
            <div class="show-mobile">
                <div class="custom-menu">
                    {{-- <ul>
                        <li><a href="#">En</a></li>
                    </ul> --}}
                </div>
                <!-- end custom-menu -->
                <div class="site-menu">
                    <ul>
                        <li><a href="/logistics">Logistics</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/tracking">Tracking</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- end site-menu -->
            </div>
            <!-- end show-mobile -->
            <small>© 2020 FDHSL | Logicstic Shipping Company</small>
        </div>
        <!-- end inner -->
    </aside>
    <!-- end side-widget -->
    <div class="topbar">
        <div class="container">
            <div class="phone">Call Us Now: <a href="#"> +1 (850) 344 0 66 </a></div>
            <!-- end phone -->
            <div class="email"> Email: <a href="#">sales@fsgl.co.uk</a> </div>
            <!-- end email -->
            <div class="social-media"> <span>Follow us</span>
                <ul>
                    <li><a href="#"><i class="lni lni-facebook-filled"></i> <span>Facebook</span></a></li>
                    <li><a href="#"><i class="lni lni-twitter-original"></i> <span>Twitter</span></a></li>
                    <li><a href="#"><i class="lni lni-linkedin-original"></i> <span>Linkedin</span></a></li>
                </ul>
            </div>
            <!-- end social-media -->
        </div>
        <!-- end container -->
    </div>
    @if (session('error'))
        <div class="col-md-10 mx-auto">
            <div class="alert alert-warning alert-dismissible fade show mt-10" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif
    <!-- end topbar -->
    <nav class="navbar">
        <div class="container">
            <div class="inner">
                <div class="logo"> <a href="/"> <img src="{{ asset('public/images/logo.png') }}" srcset="{{ asset('public/images/logo@2x.png') }}" alt="Image"> </a> </div>
                <!-- end logo -->
                <div class="custom-menu">
                    <ul>
                        <li><a href="#">En</a></li>
                    </ul>
                </div>
                <!-- end custom-menu -->
                <div class="site-menu">
                    <ul>
                        <li><a href="/logistics">Logistics</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/tracking">Tracking</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- end site-menu -->
                <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
                <!-- end hamburger-menu -->
                <div class="navbar-button"> <a href="/#calculator">GET A QUOTE</a> </div>
                <!-- end navbar-button -->
            </div>
            <!-- end inner -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->

    @yield('main')
    <!-- end content-section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <figure class="logo"> <img src="{{ asset('public/images/logo.png') }}" srcset="{{ asset('public/images/logo@2x.png') }}" alt="Image"> </figure>
                    <p>+1 (850) 344 0 66<br>
                        <a href="#">sales@fsgl.co.uk
                        </a>
                    </p>
                    <p>2075 Brandon Trail Alpharetta, <br>
                        London - UK</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    {{-- <h6 class="widget-title">Quick Links</h6>
                    <ul class="footer-menu">
                        <li><a href="#">Air Freight</a></li>
                        <li><a href="#">Sea Freight</a></li>
                        <li><a href="#">Ground Cargo</a></li>
                        <li><a href="#">Packaging Options</a></li> --}}
                        <li><a href="#">Track Your Shipment</a></li>
                    </ul>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4">
                    <h6 class="widget-title">Subscribe Newsletter</h6>
                    <form>
                        <input type="email" placeholder="enter your email address....">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <!-- end col-4 -->
                <div class="col-12">
                    <div class="footer-bottom"> <span>© 2022 FDHSL | Logicstic Shipping Company</span> </div>
                    <!-- end footer-bottom -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <!-- JS FILES -->
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/fancybox.min.js') }}"></script>
    <script src="{{ asset('public/js/swiper.min.js') }}"></script>
    <script src="{{ asset('public/js/odometer.min.js') }}"></script>
    <script src="{{ asset('public/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/js/isotope.min.js') }}"></script>
    <script src="{{ asset('public/js/scripts.js') }}"></script>
    <script>
        $(document).ready(AppLoaded)


        function AppLoaded() {
            console.log('App is Loaded and Ready');
            apply_event_handlers();
        }

        let shipping_time = 5;
        let shipping_cost = 0;
        let arrival_date = '';
        let weightOz = 0;

        /********************
         * will add event handlers to all of the appropriate elements
         *@params: none
         *@return: none
         ********************/
        function apply_event_handlers() {
            calculateButton(); //trigger calculations
        }

        /********************
         * function that triggers when calculate button is pressed
         *@params: none
         *@return: none
         ********************/
        function calculateButton() {
            $("#calcBtn").click(function() {
                let inputValidation = $("#weightInput").val()
                if (inputValidation == '') {
                    $('.btnValidation').addClass('red');
                    return false;
                } else {
                    console.log('calcBtn called.');
                    $('btn-validation').val('');
                    calculate_shipping(inputValidation, shipping_time)
                    $("#weightInput").val('');
                    $('.btnValidation').removeClass('red');
                    calculateData()
                    $('.icon-img').addClass('bounce');
                    setTimeout(function() {
                        $('.icon-img').removeClass('bounce');
                    }, 1000);
                }
            });
        }

        /********************
         * checks the incoming values. If anything other than a number or period is pressed, it returns false.
         *@params: event {object} the object that holds the details of the event
         *@return: true if the key pressed is a number or the period key, false if it is not
         ********************/

        function validate_keydown(evt, obj) {
            let charCode = (evt.which) ? evt.which : event.keyCode
            let value = obj.value;
            let dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        /********************
        * update the stored value for the shipping based on the clicked radio button.
        *@global: shipping_time
        @params: none
        *@return: none
        ********************/
        function change_shipping_type(time) {
            shipping_time = time;

            let currentDate = new Date();
            let numberOfDaysToAdd = time;
            currentDate.setDate(currentDate.getDate() + numberOfDaysToAdd);

            let dd = currentDate.getDate();
            let mm = currentDate.getMonth() + 1;
            let y = currentDate.getFullYear();

            arrival_date = dd + '/' + mm + '/' + y;
        }

        /********************
         * process the shipping time and weight, and return an object with the shipping time and weight
         *@params: weight, shipping_time
         *@return: an object with the following properties and values: weight and cost.
         ********************/
        function calculate_shipping(weight, shipping_time) {
            weightOz = weight * 16;

            if (weightOz <= 20) {
                shipping_cost = (weightOz * 0.02).toFixed(2);
            } else if (weightOz > 20 && weightOz < 32) {
                shipping_cost = (weightOz * 0.10).toFixed(2);
            } else if (weightOz >= 32) {
                shipping_cost = (weightOz * 0.20).toFixed(2);
            }

            if (shipping_time === 5) {
                shipping_cost = shipping_cost * 1;
            } else if (shipping_time === 3) {
                shipping_cost = shipping_cost * 1.5;
            } else if (shipping_time === 2) {
                shipping_cost = shipping_cost * 2;
            }
            change_shipping_type(shipping_time);
        }

        /********************
         * Populate Data on the DOM
         *@params: none
         *@return: an object with the following properties and values: arrival_date, weight and cost.
         ********************/
        function calculateData() {
         
            $('#TotalCost').text("$" + shipping_cost.toFixed(2));
        }
    </script>
</body>

</html>
