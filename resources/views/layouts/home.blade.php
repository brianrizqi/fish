<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{url('css/plugin.css')}}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="tech" class="no-tag">

<!-- Header -->
<header>
    <div class="upper-head clearfix">
        <div class="container">
            <div class="header-date">
                <p><i class="icon-clock"></i> {{date('D')}}, {{date('d F Y')}}</p>
                <p><i class="icon-cloud"></i> Jember, East Java</p>
            </div>
            <ul class="header-social-links pull-right">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</header>
<!-- Header Ends -->

<!-- Navigation Bar -->
<div class="navigation">
    <div class="container">
        <div class="navigation-content">
            <div class="header_menu">
                <!-- start Navbar (Header) -->
                <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                    <div class="logo pull-left">
                        <a href="index.html"><img alt="Image" src="images/logo1.png"></a>
                    </div>
                    <div id="navbar" class="navbar-nav-wrapper pull-right">

                        <ul class="nav navbar-nav" id="responsive-menu">

                            <li class="{{ Request::segment(1) === '/' ? 'active' : null }}">
                                <a href="{{route('welcome')}}">Home</a>
                            </li>
                            <li class="{{ Request::segment(1) === 'produk' ? 'active' : null }}">
                                <a href="{{route('produk')}}">Product</a>
                            </li>
                            <li class="{{ Request::segment(1) === 'about' ? 'active' : null }}">
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li class="{{ Request::segment(1) === 'contact' ? 'active' : null }}">
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                            @guest
                                <li>
                                    <a href="{{route('login')}}"
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{ __('Login') }}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('register')}}"
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{ __('Register') }}
                                    </a>
                                </li>
                            @else
                                <li class="{{ Request::segment(1) === 'cart' ? 'active' : null }}">
                                    <a href="{{route('cart')}}">Cart</a>
                                </li>
                                <li class="{{ Request::segment(1) === 'penjualan' ? 'active' : null }}">
                                    <a href="{{route('penjualan')}}">Penjualan</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{Auth::user()->name}}
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                       class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                            <li>
                                <a id="searchtoggl" class="searchtoggle"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                    <div id="slicknav-mobile"></div>
                </nav>
            </div>
            <div id="searchbar" class="searchbar">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="Search Now">
                        <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Navigation Bar Ends -->

@yield('content')

<!-- Footer -->
<footer>
    <div class="footer-content">
        <div class="footer-slider">
            <div class="container">
                <div class="slider-title text-center">
                    <h3>Find Us on Instagram</h3>
                </div>
                <div class="footer-slider-inner-2">
                    <div class="footer-slider-item">
                        <a href="detail.html">
                            <img alt="Image" src="images/beauty/footer1.jpg">

                        </a>
                    </div>
                    <div class="footer-slider-item">
                        <a href="detail.html">
                            <img alt="Image" src="images/beauty/footer2.jpg">

                        </a>
                    </div>
                    <div class="footer-slider-item">
                        <a href="detail.html">
                            <img alt="Image" src="images/beauty/footer3.jpg">

                        </a>
                    </div>
                    <div class="footer-slider-item">
                        <a href="detail.html">
                            <img alt="Image" src="images/beauty/footer4.jpg">

                        </a>
                    </div>
                    <div class="footer-slider-item">
                        <a href="detail.html">
                            <img alt="Image" src="images/beauty/footer2.jpg">

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="about">
                            <h3>BlogMag</h3>
                            <p>amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                dolore magna aliquyam erat.</p>
                            <ul class="header-social-links">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="categories">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#">Polictics</a></li>
                                <li><a href="#">National</a></li>
                                <li><a href="index-blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6">
                        <div class="tags">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="#">Entertainment</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#">Polictics</a></li>
                                <li><a href="#">National</a></li>
                                <li><a href="#">International</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <div class="newsletter">
                            <h3>Newsletter</h3>
                            <p> Dont Miss Anything</p>
                            <p>Subscribe to our #newsletter</p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email1" placeholder="Enter Email">
                                    <a href="#"><span class="search_btn"><i class="fa fa-paper-plane"
                                                                            aria-hidden="true"></i></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-content text-center">
                    <span>Copyright © 2018 <a
                                href="www.cyclonethemes.com">Cyclone Themes</a> - All Rights reserved</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-overlay"></div>
</footer>
<!-- Footer Ends -->

<!-- back to top start -->
<div id="back-to-top">
    <a href="#"></a>
</div>

<!-- *Scripts* -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/main.js"></script>
<script src="js/custom-mixitup.js"></script>
</body>
</html>
