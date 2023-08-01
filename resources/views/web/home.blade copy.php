@extends('webWrapper')
@section('content')
        <!-- preloader -->
        <div class="loader-wrap">
            {{-- <div class="preloader">
                <div class="preloader-close"><i class="far fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="N" class="letters-loading">
                               N
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="x" class="letters-loading">
                                x
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="v" class="letters-loading">
                                v
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                        </div>
                    </div>  
                </div>
            </div> --}}
        </div>
        <!-- preloader end -->


        <!-- switcher menu 
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="green" class="green-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>-->
        <!-- end switcher menu -->


        <!-- main header -->
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
                    <div class="right-column pull-right">
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
                    </div>
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
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Property For Sale In Dubai</h4>
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
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Property For Rent In Dubai</h4>
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
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="search-icon">
                                                                    <i class="fa fa-search" aria-hidden="true"><span class="search-text">Explore</span></i>
                                                                </div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                            <h4>Off Plan Property For Sale In Dubai</h4>
                                                        </div>
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
                                        
                                        <li class="dropdown"><a href=""><span>New Projects</span></a>
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

                                                            {{-- <h6>Appartments For Sale</h6> --}}
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

                                                            {{-- <h6>Townhouses For Sale</h6> --}}
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

                                                            {{-- <h6>Villas For Sale</h6> --}}
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

                                                            {{-- <h6>Penthouse For Sale</h6> --}}
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

                                                            {{-- <h6>Villas For Sale</h6> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="row mt-3">
                                                    <div class="col-3">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Property For Rent In Dubai</div>
                                                            </div>
                                                            <figure class="image"><img width="250" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Appartments For Rent</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Townhouses For Rent</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Villas For Rent</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div class="image-box image-card">
                                                            <div class="box">
                                                                <div class="ribbon-2">Penthouse For Rent</div>
                                                            </div>
                                                            <figure class="image"><img width="200" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            
                                            {{-- <div class="megamenu">
                                                <div class="row clearfix">
                                                    <div class="col-xl-4 column slider">
                                                        <h2><a href="{{url('properties')}}">For Sale</a></h2>
                                                        <ul>
                                                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one owl defaults">
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-4 column slider">
                                                        <h2><a href="{{url('properties')}}">For Buy</a></h2>
                                                        <ul>
                                                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one owl defaults">
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-4 column slider">
                                                        <h2><a href="{{url('properties')}}">For Rent</a></h2>
                                                        <ul>
                                                            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one owl defaults">
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="team-block-one">
                                                                    <div class="inner-box">
                                                                        <div class="box">
                                                                            <div class="ribbon-2">  <span >Starting Price</span> <span >40,000</span></div>
                                                                        </div>
                                                                        <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></figure>
                                                                        <div class="gallary-box">
                                                                            <div class="gallary-card">
                                                                                <h5>Property One</h6>
                                                                                <h6>By Meeras</h6>
                                                                                <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;&nbsp;&nbsp;PECHS Block 6 Karachi</span><br>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>                                        
                                            </div> --}}
                                        </li> 
                                        <li><a href="/"><span>Property Management</span></a>
                                            
                                        </li>
                                        <li><a href="{{url('blogs')}}"><span>Blogs</span></a>
                                           
                                        </li>  
                                        <li><a href="/"><span>Contact Us</span></a></li>   

                                        <li><a href="/"><span>About Us</span></a></li>   
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
                    
   <!-- banner-style-two -->
   <section class="banner-style-two centred">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        <div class="slide-item">
            <div class="image-layer" style="background-image:url({{asset('web-assets/images/banner/banner-2.jpg')}}) "></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Explore The Next Level Of Real Estate With Us!</h2>
                    <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                </div> 
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url({{asset('web-assets/images/banner/banner-1.jpeg')}})"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Explore The Next Level Of Real Estate With Us!</h2>
                    <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                </div>   
            </div>
        </div>
        <div class="slide-item">
            <div class="image-layer" style="background-image:url({{asset('web-assets/images/banner/banner-3.jpg')}})"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>Explore The Next Level Of Real Estate With Us!</h2>
                    <p>Amet consectetur adipisicing elit sed do eiusmod.</p>
                </div>  
            </div>
        </div>
    </div>
    </section>
    <!-- banner-style-two end -->

<!-- search-field-section -->
<section class="search-field-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="search-field">
                <div class="tabs-box">
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">BUY</li>
                            <li class="tab-btn" data-tab="#tab-2">RENT</li>
                            <li class="tab-btn" data-tab="#tab-3">Sale</li>
                        </ul>
                    </div>
                    <div class="tabs-content info-group">
                        <div class="tab active-tab" id="tab-1">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.html" method="post" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location</option>
                                                            <option value="1">New York</option>
                                                            <option value="2">California</option>
                                                            <option value="3">London</option>
                                                            <option value="4">Maxico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="All Type">All Type</option>
                                                            <option value="1">Laxury</option>
                                                            <option value="2">Classic</option>
                                                            <option value="3">Modern</option>
                                                            <option value="4">New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">
                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Distance from Location</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Distance from Location">Distance from Location</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Within 1 Mile</option>
                                                            <option value="3">Within 2 Mile</option>
                                                            <option value="4">Within 3 Mile</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bedrooms</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                            <option value="1">One Rooms</option>
                                                            <option value="2">Two Rooms</option>
                                                            <option value="3">Three Rooms</option>
                                                            <option value="4">Four Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Sort by</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Most Popular">Most Popular</option>
                                                            <option value="1">Top Rating</option>
                                                            <option value="2">New Rooms</option>
                                                            <option value="3">Classic Rooms</option>
                                                            <option value="4">Luxry Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Floor</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Select Floor">Select Floor</option>
                                                            <option value="1">One Floor</option>
                                                            <option value="2">Two Floor</option>
                                                            <option value="3">Three Floor</option>
                                                            <option value="4">Four Floor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bath</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Bath">Max Bath</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Max Bath</option>
                                                            <option value="3">Max Bath</option>
                                                            <option value="4">Max Bath</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Agencies</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Any Agency">Any Agency</option>
                                                            <option value="1">Any Agency</option>
                                                            <option value="2">Agency 01</option>
                                                            <option value="3">Agency 02</option>
                                                            <option value="4">Agency 03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Select Price Range</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-2">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.html" method="post" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location</option>
                                                            <option value="1">New York</option>
                                                            <option value="2">California</option>
                                                            <option value="3">London</option>
                                                            <option value="4">Maxico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="All Type">All Type</option>
                                                            <option value="1">Laxury</option>
                                                            <option value="2">Classic</option>
                                                            <option value="3">Modern</option>
                                                            <option value="4">New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">
                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Distance from Location</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Distance from Location">Distance from Location</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Within 1 Mile</option>
                                                            <option value="3">Within 2 Mile</option>
                                                            <option value="4">Within 3 Mile</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bedrooms</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                            <option value="1">One Rooms</option>
                                                            <option value="2">Two Rooms</option>
                                                            <option value="3">Three Rooms</option>
                                                            <option value="4">Four Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Sort by</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Most Popular">Most Popular</option>
                                                            <option value="1">Top Rating</option>
                                                            <option value="2">New Rooms</option>
                                                            <option value="3">Classic Rooms</option>
                                                            <option value="4">Luxry Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Floor</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Select Floor">Select Floor</option>
                                                            <option value="1">One Floor</option>
                                                            <option value="2">Two Floor</option>
                                                            <option value="3">Three Floor</option>
                                                            <option value="4">Four Floor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bath</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Bath">Max Bath</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Max Bath</option>
                                                            <option value="3">Max Bath</option>
                                                            <option value="4">Max Bath</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Agencies</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Any Agency">Any Agency</option>
                                                            <option value="1">Any Agency</option>
                                                            <option value="2">Agency 01</option>
                                                            <option value="3">Agency 02</option>
                                                            <option value="4">Agency 03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Select Price Range</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab" id="tab-3">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="index.html" method="post" class="search-form">
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-12 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Search Property</label>
                                                    <div class="field-input">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search-field" placeholder="Search by Property, Location or Landmark..." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location</option>
                                                            <option value="1">New York</option>
                                                            <option value="2">California</option>
                                                            <option value="3">London</option>
                                                            <option value="4">Maxico</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="All Type">All Type</option>
                                                            <option value="1">Laxury</option>
                                                            <option value="2">Classic</option>
                                                            <option value="3">Modern</option>
                                                            <option value="4">New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="search-btn">
                                            <button type="submit"><i class="fas fa-search"></i>Search</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="switch_btn_one ">
                                    <button class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced Search<i class="fas fa-angle-down"></i></button>
                                    <div class="advanced-search">
                                        <div class="close-btn">
                                            <a href="#" class="close-side-widget"><i class="far fa-times"></i></a>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Distance from Location</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Distance from Location">Distance from Location</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Within 1 Mile</option>
                                                            <option value="3">Within 2 Mile</option>
                                                            <option value="4">Within 3 Mile</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bedrooms</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Rooms">Max Rooms</option>
                                                            <option value="1">One Rooms</option>
                                                            <option value="2">Two Rooms</option>
                                                            <option value="3">Three Rooms</option>
                                                            <option value="4">Four Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Sort by</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Most Popular">Most Popular</option>
                                                            <option value="1">Top Rating</option>
                                                            <option value="2">New Rooms</option>
                                                            <option value="3">Classic Rooms</option>
                                                            <option value="4">Luxry Rooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Floor</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Select Floor">Select Floor</option>
                                                            <option value="1">One Floor</option>
                                                            <option value="2">Two Floor</option>
                                                            <option value="3">Three Floor</option>
                                                            <option value="4">Four Floor</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Bath</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Max Bath">Max Bath</option>
                                                            <option value="1">Max Bath</option>
                                                            <option value="2">Max Bath</option>
                                                            <option value="3">Max Bath</option>
                                                            <option value="4">Max Bath</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Agencies</label>
                                                    <div class="select-box">
                                                        <select class="wide">
                                                            <option data-display="Any Agency">Any Agency</option>
                                                            <option value="1">Any Agency</option>
                                                            <option value="2">Agency 01</option>
                                                            <option value="3">Agency 02</option>
                                                            <option value="4">Agency 03</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="range-box">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="price-range">
                                                        <h6>Select Price Range</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="property-amount" name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range" name="field-name" readonly=""></div>
                                                        </div>
                                                        <div class="area-range-slider"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search-field-section end -->

<!-- feature-section -->
<section class="feature-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title">
            <h2><span>Experience the Luxury Off Plan Property For Sale</span></h2>
            <div class="line"></div>
        </div>
        <div></div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img class ="feature-img" src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                           <a href="/"> <span class="category">Projects</span></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img class ="feature-img" src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <a href="/"> <span class="category">Projects</span></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img class ="feature-img" src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <a href="/"> <span class="category">Projects</span></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>$63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-btn text-center mt-5">
            <a href="" class="theme-btn btn-one">View All Listing &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!-- feature-section end -->
<!-- gallery-style-two -->
<section class="gallery-style-two  centred bg-color-1">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Top Properties For Investing</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href="" ><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left">Propery One</h3>
                            <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-style-two end -->

<!-- gallery-style-one -->
<section class="gallery-style-one sec-pad  centred">
    <div class="auto-container">
        <div class="sec-title">
            {{-- <h5>Style 3</h5> --}}
            <h2>Life Style In Dubai</h2>
        </div>
        <div class="sortable-masonry">
            <div class="filters">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter=".all">Villas</li>
                    <li class="filter" data-role="button" data-filter=".real_estate">Appartments</li>
                    <li class="filter" data-role="button" data-filter=".architechture">Town Houses</li>
                    {{-- <li class="filter" data-role="button" data-filter=".interior">Interior</li> --}}
                </ul>
            </div>
            <div class="items-container row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all real_estate architechture">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}" alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;  PECHS Block 6 Karachi, Pakistan</span><br>
                                        <i class="fa fa-cogs" aria-hidden="true"> </i><span>&nbsp;Meeras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all real_estate interior">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}" alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;  PECHS Block 6 Karachi, Pakistan</span><br>
                                        <i class="fa fa-cogs" aria-hidden="true"> </i><span>&nbsp;Meeras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all interior architechture">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}" alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;  PECHS Block 6 Karachi, Pakistan</span><br>
                                        <i class="fa fa-cogs" aria-hidden="true"> </i><span>&nbsp;Meeras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all real_estate architechture">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}" alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;  PECHS Block 6 Karachi, Pakistan</span><br>
                                        <i class="fa fa-cogs" aria-hidden="true"> </i><span>&nbsp;Meeras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all interior architechture">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}" alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;  PECHS Block 6 Karachi, Pakistan</span><br>
                                        <i class="fa fa-cogs" aria-hidden="true"> </i><span>&nbsp;Meeras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all real_estate architechture">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}" alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span class="start1">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp;  PECHS Block 6 Karachi, Pakistan</span><br>
                                        <i class="fa fa-cogs" aria-hidden="true"> </i><span>&nbsp;Meeras</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- gallery-style-one end -->
<!-- video-section -->
<section class="video-section centred" style="background-image: url({{asset('web-assets/images/background/video-1.jpg')}});">
    <div class="auto-container">
        <div class="video-inner">
            <div class="video-btn">
                <a href="https://www.youtube.com/watch?v=Kn615acNlTw" class="lightbox-image" data-caption=""><i class="icon-17"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- video-section end -->
<section class="deals-section mt-5">
    <div class="areas-section">
        <div class="beachfront" style="background-image: url({{asset('web-assets/images/areas/Beachfront-Properties-for-Sale-in-Dubai.jpg')}});">
            <p>Beach Front Properties</p>
            <div class="category-btn beach-card">
                <a href="" class="theme-btn btn-one">Explore Now</a>
            </div>
        </div>
        <div class="waterfront" style="background-image: url({{asset('web-assets/images/areas/Waterfront-Properties-for-Sale-in-Dubai.jpg')}});">
            <p>Water Front Properties</p>
            <div class="category-btn beach-card">
                <a href="" class="theme-btn btn-one">Explore Now</a>
            </div>
        </div>
        <div class="luxury" style="background-image: url({{asset('web-assets/images/areas/Dubai-Luxury-Properties-for-Sale.jpg')}});">
            <p>Dubai Luxury Living</p>
            <div class="category-btn beach-card">
                <a href="" class="theme-btn btn-one">Explore Now</a>
            </div>
        </div>
        <div class="nature" style="background-image: url({{asset('web-assets/images/areas/Green-Properties-in-Dubai-for-Sale.jpg')}});">
            <p>Green Nature Living</p>
            <div class="category-btn beach-card">
                <a href="" class="theme-btn btn-one">Explore Now</a>
            </div>
        </div>
        <div class="golf" style="background-image: url({{asset('web-assets/images/areas/Properties-Near-Golf-Course-in-Dubai.jpg')}});">
            <p>Near Golf Course</p>
            <div class="category-btn beach-card">
                <a href="" class="theme-btn btn-one">Explore Now</a>
            </div>
        </div>
    </div>
</section>
<!--  End feature-section end -->

<!-- deals-section -->
<section class="deals-section sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h2><span>Top Projects In Dubai Now.</span></h2>
            <div class="line mt-3"></div>
        </div>
        <div class="deals-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                        <div class="deals-block-one">
                            <div class="inner-box">
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Projects</span>
                                <div class="lower-content">
                                    <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$30,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                        <div class="image-box">
                            <figure class="image"><img class="deals-img" src="{{asset('web-assets/images/resource/deals-1.png')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                        <div class="deals-block-one">
                            <div class="inner-box">
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Projects</span>
                                <div class="lower-content">
                                    <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$45,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                        <div class="image-box">
                            <figure class="image"><img class="deals-img" src="{{asset('web-assets/images/resource/deals-2.png')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                        <div class="deals-block-one">
                            <div class="inner-box">
                                <div class="batch"><i class="icon-11"></i></div>
                                <span class="category">Projects</span>
                                <div class="lower-content">
                                    <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                    <div class="price-box clearfix">
                                        <div class="price-info pull-left">
                                            <h6>Start From</h6>
                                            <h4>$63,000.00</h4>
                                        </div>
                                        <ul class="other-option pull-right clearfix">
                                            <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                            <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm tempor incididunt labore.</p>
                                    <ul class="more-details clearfix">
                                        <li><i class="icon-14"></i>3 Beds</li>
                                        <li><i class="icon-15"></i>2 Baths</li>
                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                    </ul>
                                    <div class="btn-box"><a href="property-details.html" class="theme-btn btn-one">See Details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                        <div class="image-box">
                            <figure class="image"><img class="deals-img" src="{{asset('web-assets/images/resource/deals-1.png')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- deals-section end -->
 
<!-- chooseus-section -->
<section class="chooseus-section sec-pad">
    <div class="auto-container">
        <div class="inner-container bg-color-2">
            <div class="upper-box clearfix">
                <div class="sec-title light">
                    {{-- <h5>Why Choose Us?</h5> --}}
                    <h2>Why You  Choose Next-Level Real Estate?</h2>
                </div>
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-one">Inquire Now</a>
                </div>
            </div>
            <div class="lower-box">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-19"></i></div>
                                <h4>Unmatched Digital Presence</h4>
                                <p>We at Next Level have put a lot of effort into maintaining an unmatched digital presence, which helps us gain real-time market insights and provide unparalleled client service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-26"></i></div>
                                <h4>Specialised Real Estate Agents</h4>
                                <p>We have a diverse team of real estate experts who can guide you according to your needs and budget We have a diverse team of real estate experts who can guide you according to your needs and budget.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-21"></i></div>
                                <h4>Secure Investment</h4>
                                <p>Next Level Real Estate is one of the most trusted and reliable real estate companies in the Middle East when it comes to property investment. Meet your lifelong goals with a secure investment at Next Level Properties.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- chooseus-section end -->
<!-- section Developers Start
<section>
    <div class="developer-heading">
        <div class="auto-container">
            <div class="sec-title">
                <h2><span>Leading Dubai Developers</span></h2>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="developers">
            <div class="emaar-developer">
                <img class="dev-img" src="{{asset('web-assets/images/developers/EmaarBeachfront.jpg')}}">
        
                <img class="dev-logo" src="{{asset('web-assets/images/developers/EMAAR_WORD_MARK_EN.png')}}">
        
                <p>One of the best Dubai's real estate developer with an expertise in retail, hospitality and leisure. Emaar developed most of the popular projects in Dubai such as Burj Khalifa, Downtown Dubai, Emaar Beachfront, Dubai Hills Estate, Dubai Creek</p>
            </div>
            <div class="emaar-developer">
                <img class="dev-img" src="{{asset('web-assets/images/developers/EmaarBeachfront.jpg')}}">
        
        
                <img class="dev-logo" src="{{asset('web-assets/images/developers/EMAAR_WORD_MARK_EN.png')}}">
            
                <p>One of the best Dubai's real estate developer with an expertise in retail, hospitality and leisure. Emaar developed most of the popular projects in Dubai such as Burj Khalifa, Downtown Dubai, Emaar Beachfront, Dubai Hills Estate, Dubai Creek</p>
            </div>
            <div class="emaar-developer">
                <img class="dev-img" src="{{asset('web-assets/images/developers/EmaarBeachfront.jpg')}}">
        
                <img class="dev-logo" src="{{asset('web-assets/images/developers/EMAAR_WORD_MARK_EN.png')}}">
            
            
                <p>One of the best Dubai's real estate developer with an expertise in retail, hospitality and leisure. Emaar developed most of the popular projects in Dubai such as Burj Khalifa, Downtown Dubai, Emaar Beachfront, Dubai Hills Estate, Dubai Creek</p>
            </div>
        </div>
    </div>   
    <div class="auto-container">
        <div class="mt-5">
        <section class="customer-logos slider">
            <div class="slide"><img src="{{asset('web-assets/images/developers/azizi.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/danube.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/deyaar.jpg')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/ellington.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/sobha.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/gemini.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/maars.png')}}"></div>
            
        </section>
        </div>
    </div>
</section> -->
<!-- section Developers End -->

<!-- testimonial-section end -->
<section class="testimonial-section  bg-color-1 centred">
    <div class="testimonial-container">
        <div class="sec-title">
            <h5>Guides</h5>
            <h2><span>Our Top Guide Lines</span></h2>
            <div class="line2 mt-3 text-center"></div>
            <div class="row clearfix mt-3">
                <div class="col-lg-3 col-md-12 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box align-items-center">
                            <div class="content-box">
                                <i aria-hidden="true" class="fas fa-check-circle pull-left"></i>
                                <h4><a href="/">Buying Guide</a></h4>
                                <p>How to Buy Property in Dubai?</p>
                                <div class="category-btn">
                                    <a href="" class="theme-btn btn-one">Buying Guid Details &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box align-items-center">
                            <div class="content-box">
                                <i aria-hidden="true" class="fas fa-check-circle pull-left"></i>
                                <h4><a href="/">Buying Off plan Guide</a></h4>
                                <p>How to Buy Off Plan Property in Dubai?</p>
                                <div class="category-btn">
                                    <a href="" class="theme-btn btn-one">Off Plan Guid Details &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box align-items-center">
                            <div class="content-box">
                                <i aria-hidden="true" class="fas fa-check-circle pull-left"></i>
                                <h4><a href="/">Renting Guide</a></h4>
                                <p>How to Rent Property in Dubai?</p>
                                <div class="category-btn">
                                    <a href="" class="theme-btn btn-one">Renting Guid Details &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box align-items-center">
                            <div class="content-box">
                                <i aria-hidden="true" class="fas fa-check-circle pull-left"></i>
                                <h4><a href="/">Selling Guide</a></h4>
                                <p>How to Sell Property in Dubai?</p>
                                <div class="category-btn">
                                    <a href="" class="theme-btn btn-one">Buying Guid Details &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

<!-- testimonial-section-->
<section class="testimonial-section sec-pad bg-color-1 centred">
    <div class="testimonial-container">
        <div class="sec-title">
            {{-- <h2>Next Level Real Estate Market Statistics</h2> --}}
        </div>
        <div class="deals-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 deals-block">
                        <div class="image-box" style="background-image: url({{asset('web-assets/images/resource/deals-1.png')}}); height:600px;
                        background-repeat: no-repeat;
                        background-size: cover;">
                            <div class="img-box">
                                <div class="img-card text-left">
                                    <h2>Appartments For Sale In Dubai</h2>
                                    <p>Here, you get to know how much supply is coming into each area and how much housing is in demand in that particular area, along with the total number of housing units.</p>
                                    <div class="btn-box pt-2 pl-3 pb-4">
                                        <a href="" class="theme-btn btn-one">View Appartments &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 deals-block">
                        <div class="image-box" style="background-image: url({{asset('web-assets/images/resource/deals-2.png')}}); height:600px;
                        background-repeat: no-repeat;
                        background-size: cover;">
                            <div class="img-box">
                                <div class="img-card text-left">
                                    <h2>Vilas For Sale In Dubai</h2>
                                    <p>Here, you get to know how much supply is coming into each area and how much housing is in demand in that particular area, along with the total number of housing units.</p>
                                    <div class="btn-box pt-2 pl-3 pb-4">
                                        <a href="" class="theme-btn btn-one">View Vilas &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 deals-block">
                        <div class="image-box" style="background-image: url({{asset('web-assets/images/resource/deals-1.png')}}); height:600px;
                        background-repeat: no-repeat;
                        background-size: cover;">
                            <div class="img-box">
                                <div class="img-card text-left">
                                    <h2>Town Houses For Sale In Dubai</h2>
                                    <p>Here, you get to know how much supply is coming into each area and how much housing is in demand in that particular area, along with the total number of housing units.</p>
                                    <div class="btn-box pt-2 pl-3 pb-4">
                                        <a href="" class="theme-btn btn-one">View Town Houses &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

 <!-- trending-section -->
 <section class="trending-section bg-color-1">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Most Trending Projects in Dubai.</h2>
        </div>
        <div class="parent-categories mb-5">
            <div class="category-btn">
                <a href="" class="theme-btn btn-one">Vilas</a>
                <a href="" class="theme-btn btn-one">Appartments</a>
                <a href="" class="theme-btn btn-one">Flats</a>
            </div>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Ready Projects</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author.png')}}" alt=""></figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>
                                        
                                        <div class="pull-right"><figure class="author-thumb"><img width="50" src="{{asset('web-assets/images/icons/wp-icon.png')}}" alt=""></figure></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
                                        {{-- <div class="author pull-left mt-2">
                                            <figure class="location-icon"><img width="20" src="http://localhost:8000/web-assets/images/icons/map-marker-2.png" alt=""></figure>
                                            <h6>Muhammad Ali Society</h6>
                                        </div>
                                        <div class="author mt-5">
                                            <figure class="author-thumb"><img width="20" class="ml-2" src="http://localhost:8000/web-assets/images/feature/author-1.png" alt=""></figure>
                                            <h6>Meeras</h6>
                                        </div> --}}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Ready Projects</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author.png')}}" alt=""></figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>
                                        
                                        <div class="pull-right"><figure class="author-thumb"><img width="50" src="{{asset('web-assets/images/icons/wp-icon.png')}}" alt=""></figure></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
                                        {{-- <div class="author pull-left mt-2">
                                            <figure class="location-icon"><img width="20" src="http://localhost:8000/web-assets/images/icons/map-marker-2.png" alt=""></figure>
                                            <h6>Muhammad Ali Society</h6>
                                        </div>
                                        <div class="author mt-5">
                                            <figure class="author-thumb"><img width="20" class="ml-2" src="http://localhost:8000/web-assets/images/feature/author-1.png" alt=""></figure>
                                            <h6>Meeras</h6>
                                        </div> --}}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Ready Projects</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author.png')}}" alt=""></figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>
                                        
                                        <div class="pull-right"><figure class="author-thumb"><img width="50" src="{{asset('web-assets/images/icons/wp-icon.png')}}" alt=""></figure></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
                                        {{-- <div class="author pull-left mt-2">
                                            <figure class="location-icon"><img width="20" src="http://localhost:8000/web-assets/images/icons/map-marker-2.png" alt=""></figure>
                                            <h6>Muhammad Ali Society</h6>
                                        </div>
                                        <div class="author mt-5">
                                            <figure class="author-thumb"><img width="20" class="ml-2" src="http://localhost:8000/web-assets/images/feature/author-1.png" alt=""></figure>
                                            <h6>Meeras</h6>
                                        </div> --}}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Ready Projects</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author.png')}}" alt=""></figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>
                                        
                                        <div class="pull-right"><figure class="author-thumb"><img width="50" src="{{asset('web-assets/images/icons/wp-icon.png')}}" alt=""></figure></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
                                        {{-- <div class="author pull-left mt-2">
                                            <figure class="location-icon"><img width="20" src="http://localhost:8000/web-assets/images/icons/map-marker-2.png" alt=""></figure>
                                            <h6>Muhammad Ali Society</h6>
                                        </div>
                                        <div class="author mt-5">
                                            <figure class="author-thumb"><img width="20" class="ml-2" src="http://localhost:8000/web-assets/images/feature/author-1.png" alt=""></figure>
                                            <h6>Meeras</h6>
                                        </div> --}}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Ready Projects</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author.png')}}" alt=""></figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>
                                        
                                        <div class="pull-right"><figure class="author-thumb"><img width="50" src="{{asset('web-assets/images/icons/wp-icon.png')}}" alt=""></figure></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
                                        {{-- <div class="author pull-left mt-2">
                                            <figure class="location-icon"><img width="20" src="http://localhost:8000/web-assets/images/icons/map-marker-2.png" alt=""></figure>
                                            <h6>Muhammad Ali Society</h6>
                                        </div>
                                        <div class="author mt-5">
                                            <figure class="author-thumb"><img width="20" class="ml-2" src="http://localhost:8000/web-assets/images/feature/author-1.png" alt=""></figure>
                                            <h6>Meeras</h6>
                                        </div> --}}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trending-section end -->


<!-- place-section -->
<section class="place-section sec-pad">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Top Areas</h5>
            <h2>Most Popular Areas</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
        </div>
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/place-1.jpg')}}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Los Angeles</a></h4>
                                <p>10 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">San Francisco</a></h4>
                                <p>08 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Las Vegas</a></h4>
                                <p>29 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 masonry-item small-column all brand marketing print software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/place-4.jpg')}}" alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">New York City</a></h4>
                                <p>05 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- place-section end -->


<!-- team-section -->
<section class="team-section  centred bg-color-1">
    {{-- <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-1.jpg')}}); background-repeat: no-repeat;
    background-size: cover;
    background-position: center;"></div> --}}
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Agents</h5>
            <h2>Meet Our Excellent Agents</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('web-assets/images/team/team-1.jpg')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Abdul Ahad Siddiq</a></h4>
                            <span class="designation">Managing Director</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('web-assets/images/team/team-2.jpg')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Salwa Arfaoui</a></h4>
                            <span class="designation">Sales Director</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('web-assets/images/team/team-3.jpg')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Houssam eddine Salmi</a></h4>
                            <span class="designation">Client Manager at Next Level Real Estate</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('web-assets/images/team/team-4.jpg')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Muhammad Ali Khan</a></h4>
                            <span class="designation">Media Co-ordinator</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{asset('web-assets/images/team/team-5.jpg')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner">
                            <h4><a href="agents-details.html">Abdullah Farooq</a></h4>
                            <span class="designation">Property Consultant</span>
                            <ul class="social-links clearfix">
                                <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-section end -->


<!-- cta-section -->
<section class="cta-section sec-pad bg-color-2">
    <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text pull-left">
                <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
            </div>
            <div class="btn-box pull-right">
                <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->

<!--Blogs-->
 <section class="blog-section sec-pad  bg-color-1">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Your one-stop Resource Guide!</h2>
            <div class="line mt-3"></div>
        </div>
        <div class="parent-categories mb-5">
            <div class="category-btn">
                <a href="" class="theme-btn btn-one">All Projects</a>
                <a href="" class="theme-btn btn-one">Monthly Property Report</a>
                <a href="" class="theme-btn btn-one">General</a>
                <a href="" class="theme-btn btn-one">Appartment</a>
                <a href="" class="theme-btn btn-one">Property</a>
            </div>
        </div>
        <div class="row">
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Buyers Guid</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></figure>
                    <div class="blog-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author">
                                            <h6>How Investing in Emaar Properties will give you Amazing Profits in 2023</h6>
                                            <p>Emaar Properties reported a profit after expenses worth Dh6.8 billion in 2022 for the financial</p>
                                            <div class="btn-box pt-2">
                                                <a href="" class="theme-btn btn-one">Continue Reading  &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                            </div>
                                            <hr class="solid" style="background-color: white">
                                            <p>By Next Level</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Buyers Guid</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></figure>
                    <div class="blog-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author">
                                            <h6>Dubai’s Top 10 Schools for Academic Excellence and Future Leaders</h6>
                                            <p>In case you want a list of top schools in Dubai that are offering high quality of education and</p>
                                            <div class="btn-box pt-2">
                                                <a href="" class="theme-btn btn-one">Continue Reading  &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                            </div>
                                            <hr class="solid" style="background-color: white">
                                            <p>By Next Level</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <div class="box">
                        <div class="ribbon-2">Buyers Guid</div>
                    </div>
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></figure>
                    <div class="blog-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author">
                                            <h6>Why 2-bedroom apartments are high demand in Dubai?</h6>
                                            <p>The requirement for apartments significantly increased. As residents looked for more independent</p>
                                            
                                            <div class="btn-box pt-2">
                                                <a href="" class="theme-btn btn-one">Continue Reading  &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                            </div>
                                            <hr class="solid" style="background-color: white">
                                            <p>By Next Level</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-btn text-center">
            <a href="" class="theme-btn btn-one">All Blogs &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>
<!--End Blogs-->
@endsection