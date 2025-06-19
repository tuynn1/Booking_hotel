<!--
    Item Name: Luxurious - Hotel Booking HTML Template + Admin Dashboard.
    Author: ashishmaraviya
    Version: 2.2.0
    Copyright 2024
	Author URI: https://themeforest.net/user/ashishmaraviya
-->
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/luxurious-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2024 10:26:54 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best Luxurious Hotel Booking Template.">
    <meta name="keywords"
        content="hotel, booking, business, restaurant, spa, resort, landing, agency, corporate, start up, site design, new business site, business template, professional template, classic, modern">
    <title>Lumora Hotel - Hotel Booking HTML Template + Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="icon" href="{{ asset('themes/client/assets/img/favicons/favicon.png ') }}" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/bootstrap.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/magnific-popup.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/aos.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/remixicon.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/materialdesignicons.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/swiper-bundle.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/semantic.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/vendor/slick.min.css ') }}">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('themes/client/assets/css/style.css ') }}">

</head>

<body>
    <!-- Overlay -->
    <div class="overlay"></div>
    <div class="lh-loader">
        <span class="loader"></span>
    </div>
      <!-- Header -->
    <header>
        <div class="lh-top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12  lh-top-social">
                        <div class="lh-mail">
                            <i class="ri-mail-line"></i>
                            example@ec-email.com
                        </div>
                        <div class="lh-location">
                            <div class="custom-select">
                                <i class="ri-map-pin-line"></i>
                                <select>
                                    <option value="option1">Surat</option>
                                    <option value="option2">Delhi</option>
                                    <option value="option3">Rajkot</option>
                                    <option value="option4">Udaipur</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 lh-top-social">
                        <div class="lh-phone">
                            <i class="ri-phone-line"></i>
                            +91(123)(456)(7890)
                        </div>
                        <div class="lh-header-icons">
                            <a href="javascript:void(0)"><i class="ri-facebook-box-line facebook"></i></a>
                            <a href="javascript:void(0)"><i class="ri-twitter-x-line twitter"></i></a>
                            <a href="javascript:void(0)"><i class="ri-linkedin-box-line linkedin"></i></a>
                            <a href="javascript:void(0)"><i class="ri-instagram-line instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lh-header">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('themes/client/assets/img/logo/logo.png') }}" alt="logo" class="lh-logo">
                        </a>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ri-menu-2-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{ url('/') }}" role="button">
                                        Home                               
                                    </a>          
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Category
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="gallery.html">gallery 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="gallery-2.html">gallery 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Room
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="room.html">Rooms</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="room-2.html">Rooms 2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="room-details.html">Rooms details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Pages
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="about.html">About Us</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/contact') }}">Contact</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="facilities.html">Facilities</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="faq.html">Faq</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="prices.html">Prices</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="services.html">Services</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="spa.html">Spa</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="team.html">Team</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button"
                                        data-bs-toggle="dropdown">
                                        Blog
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="restaurant.html">
                                        Restaurant
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile-menu -->
    <div class="lh-sidebar-overlay"></div>
    <div id="lh_mobile_menu" class="lh-side-cart lh-mobile-menu">
        <div class="lh-menu-title">
            <span class="menu-title">My Menu</span>
            <button class="lh-close">×</button>
        </div>
        <div class="lh-menu-inner">
            <input type="text" placeholder="Search" class="lh-menu-box">
            <div class="lh-menu-content">
                <ul>
                    <li class="dropdown drop-list">
                        <a href="#" class="dropdown-list">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home Layout 1</a></li>
                            <li><a href="demo-2.html">Home Layout 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <a href="#" class="dropdown-list">Categories</a>
                        <ul class="sub-menu">
                            <li><a href="gallery.html">gallery 1</a></li>
                            <li><a href="gallery-2.html">gallery 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <a href="#" class="dropdown-list">Room</a>
                        <ul class="sub-menu">
                            <li><a href="room.html">Rooms</a></li>
                            <li><a href="room-2.html">Rooms 2</a></li>
                            <li><a href="room-details.html">Room Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <a href="#" class="dropdown-list">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="facilities.html">Facilities</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="prices.html">Prices</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="spa.html">Spa</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <a href="#" class="dropdown-list">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown drop-list">
                        <a href="restaurant.html">Restaurant</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
   

    <!-- Mobile-menu -->
    {{-- @include('clients.layout.menu') --}}
{{--     @include('clients.layout.blocks.slider')--}}
    <!-- Hero -->


    <main>
        @yield('content')
    </main>

  <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-top-section">
            <div class="row">
                <div class="col-lg-3 col-md-6 rs-pb-24 p-991 order-lg-1 order-md-2 order-2">
                    <div class="lh-footer-cols-contain">
                        <div class="lh-footer-heading">
                            <h4>Explore</h4>
                        </div>
                        <ul>
                            <li>
                                <code>*</code>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <code>*</code>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <code>*</code>
                                <a href="room-details.html">Rooms & suites</a>
                            </li>
                            <li>
                                <code>*</code>
                                <a href="spa.html">spa & Wellness</a>
                            </li>
                            <li>
                                <code>*</code>
                                <a href="restaurant.html">Restaurant</a>
                            </li>
                            <li>
                                <code>*</code>
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li>
                                <code>*</code>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 rs-pb-24 order-lg-2 order-md-1 order-1">
                    <div class="lh-social-media">
                        <div class="footer-logos">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </div>
                        <div class="lh-footer-social">
                            <p>This is the dolor sit amet consectetur adipisicing elit. Libero voluptatem soluta eaque
                                ullam accusantium animi!</p>
                            <form class="lh-control-footer" role="search">
                                <div class="lh-control-inner-icons">
                                    <i class="ri-send-plane-line"></i>
                                </div>
                                <input class="form-control shadow-none me-4" type="search" placeholder="Subscribe..."
                                    aria-label="Search">
                            </form>
                        </div>
                        <div class="lh-follow-social">
                            <h4 class="heading">Follow On Social</h4>
                            <div class="footer-logo-image">
                                <a href="#"><img src="assets/img/logo/facebook.png" alt="facebook"></a>
                                <a href="#"><img src="assets/img/logo/twitter.png" alt="twitter"></a>
                                <a href="#"><img src="assets/img/logo/instagram.png" alt="instagram"></a>
                                <a href="#"><img src="assets/img/logo/linkedin.png" alt="linkedin"></a>
                                <a href="#"><img src="assets/img/logo/dribbble.png" alt="dribbble"></a>
                                <a href="#"><img src="assets/img/logo/pinterest.png" alt="pinterest"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 rs-pb-24 order-lg-3 order-md-3 order-3">
                    <div class="lh-footer-cols-contain ">
                        <div class="lh-footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <div class="lh-footer-contact-infoemation">
                            <ul>
                                <li class="lh-information">
                                    <h5 class="heading">Location</h5>
                                    <span>5 Green st.Huntington stati on, Ny 11746, Libero voluptatem soluta
                                        Bharat.</span>
                                </li>
                                <li class="lh-information">
                                    <h5 class="heading">Email</h5>
                                    <span>example@ec-email.com</span>
                                </li>
                                <li class="lh-information">
                                    <h5 class="heading">Phone No</h5>
                                    <span>+91(1234)(567)(890)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="footer-bottom-copy">
                <span>Copyright @ <span id="copyright_year"></span> <a href="index.html">Luxurious</a> All Rights Reserved</span>
            </div>
        </div>
    </footer>

    {{-- @include('clients.layout.blocks.footer') --}}



    <!-- Plugins JS -->
    <script src="{{ asset('themes/client/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/aos.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/semantic.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/particles.min.js')}}"></script>
    <script src="{{ asset('themes/client/assets/js/vendor/app.js')}}"></script>

    <!-- Main-js -->
    <script src="{{ asset('themes/client/assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/luxurious-html-v22/luxurious-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Dec 2024 10:27:00 GMT -->
</html>
