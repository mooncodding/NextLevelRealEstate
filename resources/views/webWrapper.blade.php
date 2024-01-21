
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='locale' content='{{app()->getLocale()}}' />
  <title>Next Level</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Stylesheets -->
  <link href="{{asset('web-assets/css/font-awesome-all.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/flaticon.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/owl.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/jquery-ui.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/nice-select.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
  <link href="{{asset('web-assets/css/switcher-style.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('web-assets/css/responsive.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" href="images/icon.png">
  
</head>
<body>
    <div class="boxed_wrapper">
        <!-- preloader -->
        <div class="loader-wrap">
        </div>
        <!-- preloader end -->
        @if (request()->is('/'))
        <header class="main-header header-style-two">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>1505, Opal Tower Burj Khalifa Boulevard Business Bay Dubai.</li>
                            {{-- <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li> --}}
                            <li><i class="far fa-phone"></i><a href="tel:+971 4 454 2828">+971 4 454 2828</a></li>
                        </ul>
                    </div>
                    {{-- <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                        <div class="sign-box">
                            <a href="/login"><i class="fas fa-user"></i>Sign In</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{asset('web-assets/images/footer-logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="/"><span>Home</span></a>
                                        </li>
                                        <li class="dropdown"><a href=""><span>Ready Properties</span></a>
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                            <a href="/properties">
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Property For Sale In Dubai</h4></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Appartments For Sale</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <h5>Townhouses For Sale</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <h5>Villas For Sale</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Penthouse For Sale</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="line-2">
                                                <div class="row mt-4">
                                                    <div class="col-3">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <a href="/properties">
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Property For Rent In Dubai</h4>
                                                                </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Appartments For Rent</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <h5>Townhouses For Rent</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <h5>Villas For Rent</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Penthouse For Rent</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        <li class="dropdown"><a href=""><span>Off Plan Properties</span></a>
                                            
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <a href="/properties">
                                                            <div class="image-box image-card">
                                                                <div class="box">
                                                                    <div class="search-icon">
                                                                        <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                    </div>
                                                                </div>
                                                                <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                                <h4>Off Plan Property For Sale In Dubai</h4>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Off Plan Appartments</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <h5>Off Plan Townhouses</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <h5>Off Plan Villas</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Off Plan Penthouse</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            {{-- <ul>
                                                <li><a href="">Off Plan Appartment For Sale</a></li>
                                                <li><a href="">Off Plan Vilas For Sale</a></li>
                                                <li><a href="">Off Plan TownHouses For Sale</a></li>
                                            </ul> --}}
                                        </li>
                                        
                                        {{-- <li class="dropdown"><a href=""><span>New Projects</span></a>
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Starting Price: 75000 AED</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                            <h5 class="text-center">Seepoint</h5>
                                                            <h6 class="text-center">By Emaar</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Starting Price: 75000 AED</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                            <h5 class="text-center">Seepoint</h5>
                                                            <h6 class="text-center">By Emaar</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Starting Price: 75000 AED</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                            <h5 class="text-center">Seepoint</h5>
                                                            <h6 class="text-center">By Emaar</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Starting Price: 75000 AED</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                            <h5 class="text-center">Seepoint</h5>
                                                            <h6 class="text-center">By Emaar</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Starting Price: 75000 AED</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                            <h5 class="text-center">Seepoint</h5>
                                                            <h6 class="text-center">By Emaar</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Starting Price: 75000 AED</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                            <h5 class="text-center">Seepoint</h5>
                                                            <h6 class="text-center">By Emaar</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>  --}}
                                        <li><a href="/propertyManagement"><span>Property Management</span></a>
                                            
                                        </li>
                                        
                                        <li><a href="/areas"><span>Areas</span></a>
                                        </li>
                                        <li><a href="/blogs"><span>Blogs</span></a>
                                           
                                        </li>  
                                        <li><a href="/contact"><span>Contact Us</span></a></li>   

                                        <li class="dropdown"><a href="/about"><span>About Us</span></a>
                                            <ul>
                                                <li><a href="/agents">Our Team</a></li>
                                                <li><a href="https://www.youtube.com/channel/UCtNFEfB4qPfMejiNKvRN1rA">Property Videos</a></li>
                                                <li><a href="">Privacy Policy</a></li>
                                                <li><a href="/faq">FAQ's</a></li>
                                            </ul>
                                        </li>    
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="/" class="theme-btn btn-one"><span></span>Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{asset('web-assets/images/footer-logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-one">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @else
        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>1505, Opal Tower Burj Khalifa Boulevard Business Bay Dubai.</li>
                            {{-- <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li> --}}
                            <li><i class="far fa-phone"></i><a href="tel:+971 4 454 2828">+971 4 454 2828</a></li>
                        </ul>
                    </div>
                    {{-- <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=    "index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                        <div class="sign-box">
                            <a href="/login"><i class="fas fa-user"></i>Sign In</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{asset('web-assets/images/logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="/"><span>Home</span></a>
                                        </li>
                                        <li class="dropdown"><a href=""><span>Ready Properties</span></a>
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <a href="/properties">
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Property For Sale In Dubai</h4>
                                                                </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Appartments For Sale</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <h5>Townhouses For Sale</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <h5>Villas For Sale</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Penthouse For Sale</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="line-2">
                                                <div class="row mt-4">
                                                    <div class="col-3">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <a href="/properties">
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Property For Rent In Dubai</h4>
                                                                </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Appartments For Rent</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <h5>Townhouses For Rent</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <h5>Villas For Rent</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Penthouse For Rent</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                        <li class="dropdown"><a href=""><span>Off Plan Properties</span></a>
                                            
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <a href="/properties">
                                                            <div class="image-box image-card">
                                                                <div class="box">
                                                                    <div class="search-icon">
                                                                        <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                    </div>
                                                                </div>
                                                                <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                                <h4>Off Plan Property For Sale In Dubai</h4>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Off Plan Appartments</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                            <h5>Off Plan Townhouses</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                            <h5>Off Plan Villas</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Strating Price: 30000</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h5>Off Plan Penthouse</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            {{-- <ul>
                                                <li><a href="">Off Plan Appartment For Sale</a></li>
                                                <li><a href="">Off Plan Vilas For Sale</a></li>
                                                <li><a href="">Off Plan TownHouses For Sale</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="/propertyManagement"><span>Property Management</span></a>
                                            
                                        </li>
                                        <li><a href="/areas"><span>Areas</span></a>
                                        </li>
                                        <li><a href="/blogs"><span>Blogs</span></a>
                                           
                                        </li>  
                                        <li><a href="/contact"><span>Contact Us</span></a></li>   

                                        <li class="dropdown"><a href="/about"><span>About Us</span></a>
                                            <ul>
                                                <li><a href="/agents">Our Team</a></li>
                                                <li><a href="https://www.youtube.com/channel/UCtNFEfB4qPfMejiNKvRN1rA">Property Videos</a></li>
                                                <li><a href="">Privacy Policy</a></li>
                                                <li><a href="/faq">FAQ's</a></li>
                                            </ul>
                                        </li>   
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="/" class="theme-btn btn-one"><span></span>Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="/"><img src="{{asset('web-assets/images/footer-logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="" class="theme-btn btn-one">Inquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->
        @endif
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{asset('web-assets/images/footer-logo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>1505, Opal Tower Burj Khalifa Boulevard Business Bay Dubai.</li>
                        <li><a href="tel:+971 4 454 2828">+971 4 454 2828</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
        <main>
            @yield('content')
        </main>
        <!-- Content Wrapper. Contains page content -->
        <router-view></router-view>
        <vue-progress-bar></vue-progress-bar>
        <!-- /.content-wrapper -->
        <!-- main-footer -->
        <footer class="main-footer" >
            <div style="background-image: url({{asset('web-assets/images/background/footer-bg-1.jpg')}}); background-size: cover;">
                <div class="footer-top bg-color-10" >
                    <div class="footerr">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Popular Searches</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list class">
                                            <li><a href="/properties">Properties For Sale In Dubai</a></li>
                                            <li><a href="/properties">Apartments For Sale In Dubai</a></li>
                                            <li><a href="/properties">Villas For Sale In Dubai</a></li>
                                            <li><a href="/properties">Townhouses For Sale In Dubai</a></li>
                                            <li><a href="/properties">Properties For Rent In Dubai</a></li>
                                            <li><a href="/properties">Apartments For Rent In Dubai</a></li>
                                            <li><a href="/properties">Villas For Rent In Dubai</a></li>
                                            <li><a href="/properties">Townhouses For Rent In Dubai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Off Plan Projects Developers</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list class">
                                            <li><a href="">Emaar Properties</a></li>
                                            <li><a href="">Dubai Properties</a></li>
                                            <li><a href="">Damac Properties</a></li>
                                            <li><a href="">Sobha Developer</a></li>
                                            <li><a href="">Nakheel Properties</a></li>
                                            <li><a href="">Meeras Developers</a></li>
                                            <li><a href="">Deyaar Developers</a></li>
                                            <li><a href="">MAG Property</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>Popular Areas</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list class">
                                            <li><a href="/properties">Dubai Creek Harbour</a></li>
                                            <li><a href="/properties">Dubai Hills Estate</a></li>
                                            <li><a href="/properties">Downtown Dubai</a></li>
                                            <li><a href="/properties">Emaar Beachfront</a></li>
                                            <li><a href="/properties">Dubai Land</a></li>
                                            <li><a href="/properties">Jumeirah Village Circle</a></li>
                                            <li><a href="/properties">Business Bay</a></li>
                                            <li><a href="/properties">Arabian Ranches III</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h3>About</h3>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list class">
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/properties">Ready Properties</a></li>
                                            <li><a href="/properties">Offline Properties</a></li>
                                            <li><a href="/blogs">Our Blogs</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix mt-5">
                            <div class="col-12">
                            <p class="text-center">We do marketing and selling of real estate properties under good prices. These properties are owned by individuals as well as investors.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="inner-box clearfix">
                            <figure class="footer-logo"><a href="index.html"><img src="{{asset('web-assets/images/footer-logo.png')}}" alt=""></a></figure>
                            
                            <div class="copyright pull-left">
                                <p>Copyright &copy; {{ now()->year }} Vivotic Solucion Company All rights reserved.</p>
                            </div>
                            <div class="float-right d-none d-sm-inline">
                                Developer By <a href="#">Vivotic Solucion</a>
                            </div>
                            {{-- <ul class="footer-nav pull-right clearfix">
                                <li><a href="index.html">Terms of Service</a></li>
                                <li><a href="index.html">Privacy Policy</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- main-footer end -->
        <!--Scroll to top-->
        <button class="chatbot-button" data-target="html">
            <i class='fa fa-comments' style='font-size:30px;color:white'></i>
        </button>
        <button class="notification-button" data-target="html">
            <i class='fa fa-bell' style='font-size:30px;color:white'></i>
        </button>
        {{-- <button class="message-button" data-target="html">
            <i class='fa fa-comment' style='font-size:37px;color:white'></i>
        </button> --}}
        <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hello"
target="_blank" class="whatsapp-button" data-target="html"> <i class='fab
fa-whatsapp' style='font-size:42px;color:white'></i> </a> 
        {{-- <div class="whatsapp-button">
            <div class="chat-btn">
            <div class="form-inner">
                                <form action="property-details.html" method="post" class="default-form">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Your Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="theme-btn btn-one">Send Message</button>
                                    </div>
                                </form>
                            </div>
        </div>
        </div>
        </div> --}}
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class='fab fa-accusoft' style='font-size:30px;color:white'></i>
        </button>
        <!--End Scroll to top-->

  </div>  
    <!-- jequery plugins -->
    <script  src="{{asset('web-assets/js/jquery.js')}}"></script>
    <script  src="{{asset('web-assets/js/popper.min.js')}}"></script>
    <script  src="{{asset('web-assets/js/bootstrap.min.js')}}"></script>
    <script  src="{{asset('web-assets/js/owl.js')}}"></script>
    <script  src="{{asset('web-assets/js/wow.js')}}"></script>
    <script  src="{{asset('web-assets/js/validation.js')}}"></script>
    <script  src="{{asset('web-assets/js/jquery.fancybox.js')}}"></script>
    <script  src="{{asset('web-assets/js/appear.js')}}"></script>
    <script  src="{{asset('web-assets/js/scrollbar.js')}}"></script>
    <script  src="{{asset('web-assets/js/isotope.js')}}"></script>
    <script  src="{{asset('web-assets/js/jquery.nice-select.min.js')}}"></script>
    <script  src="{{asset('web-assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script  src="{{asset('web-assets/js/jquery-ui.js')}}"></script>
    <script  src="{{asset('web-assets/js/nav-tool.js')}}"></script>
    <script  src="{{asset('web-assets/js/developer.js')}}"></script>
    <script  src="{{asset('web-assets/js/bxSlider.js')}}"></script>
    <script  src="{{asset('web-assets/js/jquery.paroller.min.js')}}"></script>
    {{-- <script  src="{{asset('web-assets/js/timePicker.js')}}"></script> --}}

    <!-- main-js -->
    <script  src="{{asset('web-assets/js/script.js')}}"></script>
    <script  src="{{asset('web-assets/js/product-filter.js')}}"></script>

    {{--  --}}
    <script  src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- map script -->
    <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBq5MuvFcYjhNfkw-v81FR2H6pGwGMDVxg"></script>
    <script  src="{{asset('web-assets/js/gmaps.js')}}"></script>
    <script  src="{{asset('web-assets/js/map-helper.js')}}"></script>
    <script>
        $(document).ready(function(){
          $(".exterior-btn").click(function(){
            $(".exterior").show();
            $(".interior").hide();
          });
          $(".interior-btn").click(function(){
            $(".interior").show();
            $(".exterior").hide();
          });
          $(".exterior").css("display", "none");
        });
        </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
    
    
</body>
</html>
