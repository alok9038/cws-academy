<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/24429d851b.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#news-slider").owlCarousel({
                items : 4,
                itemsDesktop:[1199,3],
                itemsDesktopSmall:[980,2],
                itemsMobile : [600,1],
                // navigation:true,
                // navigationText:["",""],
                pagination:true,
                autoPlay:true
            });
        });
    </script>
</head>

<body>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header p-3">
            <div class="d-flex">
                <div class="img-card rounded-circle bg-danger">
                </div>
                <span class="d-flex ms-2 align-items-center">
                    Hi, John walker
                </span>
            </div>
        </div>
        <ul class="list-unstyled components p m-0 border-0">
            <h5 class="h6 ps-2 heading">Learn</h5>
            <li class="">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">My learning</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li >
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
        <hr>
            <h5 class="h6 ps-2 heading">Popular Categories</h5>
            <li>
                <a href="#">About</a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light bg-white m-0">
        <div class="container">
            <button type="button" id="sidebarCollapse" class="btn d-lg-none d-flex shadow-none">
                <i class="fas fa-align-left"></i>
                <span></span>
            </button>
            <a href="{{ route('homepage') }}" class="navbar-brand mx-lg-0 mx-auto">Cws - <span class="text-success">academy</span></a>
            <form action="" class="d-flex ms-5 d-lg-flex d-none">
                <div class="input-group">
                    <input type="search" size="50" class="form-control rounded-25 p-2 shadow-none" style="font-size: 13px;" placeholder="  search for anything">
                    <button class="btn bg-transparent shadow-none text-muted" style="margin-left:-47px; "><i class="fa fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav ms-auto d-lg-flex d-md-flex d-none navbar-links">
                {{-- <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link active">Home</a></li> --}}
                <li class="nav-item"><a href="" class="nav-link ms-2 "><i class="far fa-heart"></i></a></li>
                <li class="navbar-dropdown">
                    <a href="#" class=""><i class="far fa-bell"></i></a>
                    <div class="dropdown  rounded-15" style="left: -100px!important;">
                      <h6 class="h6 ms-3">Notifications</h6>
                      <a href="#">lorem ipsum emmet </a>
                      <a href="#">Laravel</a>
                      <a href="#">Django</a>
                    </div>
                  </li>
                <li class="nav-item"><a href="" class="nav-link ms-2 "><i class="fa fa-shopping-cart"></i></a></li>
                {{-- <li class="nav-item"><a href="" class="nav-link ms-2 btn btn-outline-info px-3 py-2 rounded-25">Login</a></li> --}}
                <li class="nav-item navbar-dropdown" >
                    <a href="" class="nav-link ms-2 btn btn-outline-info px-auto py-2 rounded-circle" style="width: 40px; height:40px;">AK</a>
                    <div class="dropdown rounded-15" style="left: -150px!important;">
                        <div class="d-flex">
                            <div class="ms-3 rounded-circle bg-danger" style="width: 40px; height:40px;">
                            </div>
                            <span class="d-flex ms-2 align-items-center">
                                Hi, John walker
                            </span>
                        </div>
                        <hr>
                      <a href="#">My learning</a>
                      <a href="#">My cart</a>
                      <a href="#">Messages</a>
                      <a href="#">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="d-lg-none d-md-none d-flex">
                <a href="#search" type="button" id="sidebarCollapse" class="btn d-lg-none d-flex shadow-none">
                    <i class="fa fa-search"></i>
                </a>
                <button type="button" id="sidebarCollapse" class="btn d-lg-none d-flex shadow-none">
                    <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>
    </nav>

    @include('include.category_nav')
    <!-- banner -->
    <!-- <div class="container-fluid p-0">
        <img src="assets/images/hero.jpg" class="img-fluid" alt="">
    </div> -->

    @yield('content')

    <div class="overlay">
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form method="get" action="">
            <input type="search" value="" placeholder="search anything :)" />
            <button type="submit" class="btn btn-outline-primary rounded-25 px-4">Search</button>
        </form>
    </div>


    <!-- footer -->


<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-4 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                        <p>Don’t miss any updates of our new templates and extensions.!</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Download</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Android App</a></li>
                            <li><a href="#">ios App</a></li>
                            <li><a href="#">Desktop</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">My tasks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 col-md-6 col-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Term &amp; conditions</a></li>
                            <li><a href="#">Reporting</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                        <div class="f_social_icon">
                            <a href="#" class="fab fa-facebook"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                            <a href="#" class="fab fa-pinterest"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div> -->
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">© CWS-Academy Inc.. 2019 All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">
                    <!-- <p>Made by <i class="icon_heart"></i> in <a href="#">cws</a></p> -->
                </div>
            </div>
        </div>
    </div>
</footer>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script> -->
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <!-- jQuery Custom Scroller CDN -->
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>

    <script type="text/javascript">
            $(function () {
            $('a[href="#search"]').on('click', function(event) {
                event.preventDefault();
                $('#search').addClass('open');
                $('#search > form > input[type="search"]').focus();
            });

            $('#search, #search button.close').on('click keyup', function(event) {
                if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
                    $(this).removeClass('open');
                }
            });
        });
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

        // slider
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script> -->
</body>

</html>
