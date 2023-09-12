@extends('webWrapper') 
@section('content')

    <section class="property-title"
        style="background-image:url({{asset('web-assets/images/resource/propertybanner.jpg')}}) ">
        <div class="overlay-property">
       <div class="container">
                <div class="row content-box clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 property-intro">
                        <h1>The Farmhouses at Damac Hills 2</h1>
                        <p>Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque dicta quam? Odio voluptatum dicta,
                            quasi fugiat vero Lorem,
                            ipsum dolor sit amet consectetur adipisicing elit. Nemo eaque dicta quam? Odio voluptatum dicta,
                            quasi fugiat vero </p>
                        <div class="main-pattern prop-price">
                            <div class="banner-style">
                                <p><i class="bi bi-wallet2"></i></p>
                                <p><b>Starting Price</b><br>On Request</p>
                            </div>
                            <div class="banner-pattern prop-plan">
                                <p><i class="bi bi-tags"></i></p>
                                <p><b>Payment Plan </b><br>On Request</p>
                            </div>
                            <div class="banner-handover prop-handover">
                                <p><i class="bi bi-check2-circle"></i></p>
                                <p><b>Handover </b><br>On Request</p>
                            </div>
                        </div>
                        <div class="banner-btn prop-btn ">
                            <div class="banner-inquiry prop-call"><a href="index-5.html" class="property-btn"><i
                                        class="bi bi-arrow-right-circle">&nbsp;
                                    </i>Request A Property Appraisal</a></div>
                            <div class="video-btn"><a href="https://www.youtube.com/watch?v=Kn615acNlTw"
                                    class="lightbox-image" data-caption=""><i class="icon-17"></i></a></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12"></div>
                    {{-- <div class="col-lg-3 col-md-3 col-sm-12 property-main">
                        <div class="inquiry-btnform">
                            <h3>Learn More About Project</h3>
                            <div class="property-contact"><a href="index-5.html" class="property-btn"><i
                                        class="bi bi-telephone-inbound">&nbsp;
                                    </i>Contact Now</a></div>
                            <div class="property-whatsapp"><a href="index-5.html" class="property-btn"><i
                                        class="bi bi-whatsapp">&nbsp;
                                    </i>Find out in whatsapp</a></div>
                            <div class="Property-consultant"><a href="index-5.html" class="property-btn"><i
                                        class="bi bi-person">&nbsp;
                                    </i>Get a free consultation</a></div>
                            <div></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
        <!-- property-details -->
            <section class="property-details property-details-four">
                <div class="auto-container">
                    <div class="top-details clearfix">
                        <div class="left-column pull-left clearfix">
                            <div class="price-inner clearfix">
                                <ul class="category clearfix pull-left">
                                    <li><a href="property-details.html">NEW LAUNCH</a></li>
                                    <li><a href="property-details.html">OFF PLAN</a></li>
                                    <li><a href="property-details.html">DAMAC</a></li>
                                </ul>
                            </div>
                            <h3>Starting Price : AED 6,
                                500,
                                000 </h3>
                            <h5>By Damac Developer</h5>
                            <h6><i class="fas fa-map-marker-alt"></i>&nbsp;
                                Damac Hills 2,
                                Dubai </h6>
                        </div>
                        <div class="right-column pull-right clearfix sidebar-side">
                            <div class="property-sidebar profile-icon">
                                <div class="author-widget sidebar-widget">
                                    <div class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{asset('web-assets/images/resource/author-1.jpg')}}" alt=""
                                                width="70"></figure>
                                        <div class="inner">
                                            <h4>Call the project <br>expert for a consult </h4>
                                            <div class="main-propertybtn">
                                                <div class="btn-box"><a href="property-details.html"
                                                        class="theme-btn btn-two">View Profile</a></div>
                                                <div class="what-btn"><a href="property-details.html"
                                                        class="theme-btn btn-two whatcall-btn"><i
                                                            class="bi bi-whatsapp"></i></a></div>
                                                <div class="call-btn"><a href="property-details.html"
                                                        class="theme-btn btn-two directcall-btn"><i
                                                            class="bi bi-telephone-inbound"></i></a></div>
                                                <div class="email-btn"><a href="property-details.html"
                                                        class="theme-btn btn-two mailinquiry-btn"><i
                                                            class="bi bi-envelope-check"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
                <section class="property-brochure">
                <div class="row">
                    <div class="col-6 brochure-content">
                        <h2>Get Free PDF Brochure</h2>
                        <p>The Farmhouses is a new residential development in the family-oriented area of DAMAC Hills 2.
                            It’s an exclusive project,
                            offering 5-6 bedroom farmhouse villas. The development will be appreciated by those wishing
                            to emerge into an eco-friendly living,
                            grow fruits and vegetables on the territory of your home,
                            as well as ride around the community on the horse</p>
                        <div class="download-brochure"><a href="index-5.html" class="freebrochure"><i
                                    class="bi bi-cloud-arrow-down">&nbsp;

                                </i>Download Free PDF Brochure</a></div>
                    </div>
                    <div class="col-6 brochure-img"><img src="{{asset('web-assets/images/banner/brochure.png')}}"
                            alt=""></div>
                </div>
            </section>
            <section class="category-section centred property-overview">
                <h2>Property Overview</h2>
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <ul class="category-list clearfix over">
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-1"></i></div>
                                    <h5><a href="property-details.html">Type</a></h5>
                                    <h6>Farm House</h6>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box">  <i class="fas fa-bed    "></i></div>
                                    <h5><a href="property-details.html">Bedroom</a></h5>
                                    <h6>5 & 6
                                    </h6>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="fas fa-bath    "></i></div>
                                    <h5><a href="property-details.html">Bathroom</a></h5>
                                    <h6>2, 3 & 4
                                    </h6>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>                
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="bi bi-arrows-move"></i></div>
                                    <h5><a href="property-details.html">Area Size
                                    </a></h5>
                                    <h6>5040 sqft</h6>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="bi bi-calendar-week"></i></div>
                                    <h5><a href="property-details.html">Year Built
                                    </a></h5>
                                    <h6>Update Soon</h6>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-4"></i></div>
                                    <h5><a href="property-details.html">Developer
                                    </a></h5>
                                    <h6>DAMAC</h6>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        <section class="property-details property-details-two gallery-style-one sec-pad  centred property-galler">
            <div class="sec-title">
                <div class="gallery-heading">
                    {{-- <h5>Style 3</h5> --}}
                    <h2>Photo Gallery</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix life-style">
                            <li class="active filter interior-btn">Interior</li>
                            <li class="filter exterior-btn">Exterior</li>
                            {{-- <li class="filter" data-role="button" data-filter=".interior">Interior</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="carousel-inner interior">
                <div class="bxslider">
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-2.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-4.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-5.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-2.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-4.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-5.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/property-details-5.jpg')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/property-details-6.jpg')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-inner exterior">
                <div class="bxslider">
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-2.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-4.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                                {{-- <li>
                                    <a data-slide-index="5" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                                {{-- <li>
                                    <a data-slide-index="5" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                                {{-- <li>
                                    <a data-slide-index="5" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                                {{-- <li>
                                    <a data-slide-index="5" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="slider-content">
                        <div class="product-image">
                            <figure class="image-box"><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure>
                        </div>
                        <div class="slider-pager">
                            <ul class="thumb-box clearfix">
                                <li>
                                    <a class="active" data-slide-index="0" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="1" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="2" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-3.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="3" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-1.webp')}}" alt=""></figure></a>
                                </li>
                                <li>
                                    <a data-slide-index="4" href="#"><figure><img src="{{asset('web-assets/images/resource/slider-6.webp')}}" alt=""></figure></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>  
         
            <section class="main-paymentplan">
                <h2 class="paymentplan-h2">The Farmhouses at Damac Hills 2 <br>Payment plans.</h2>
                <div class="paymentplan">
                    <div class="paymentplan-box">
                        <i class="bi bi-tags"></i>
                        <h3>5%</h3>
                        <h4>First Installment</h4>
                    </div>
                    <div class="paymentplan-box">
                        <i class="bi bi-cone-striped"></i>
                        <h3>35%</h3>
                        <h4>Under Construction</h4>
                    </div>
                    <div class="paymentplan-box">
                        <i class="bi bi-key"></i>
                        <h3>60%</h3>
                        <h4>On Handover</h4>
                    </div>
                </div>
                <div class="paymentplan-2">
                    <div class="paymentplan-box-2">
                        <h4>No Commission</h4>
                        <i class="bi bi-terminal-x"></i>
                    </div>
                    <div class="paymentplan-box-2">
                        <h4>Direct Sales</h4>
                        <i class="bi bi-universal-access"></i>
                    </div>
                    <div class="paymentplan-box-2">
                        <h4>Trusted & Simple</h4>
                        <i class="bi bi-bookmark-heart-fill"></i>
                    </div>
                </div>
            </section>
            <section class="gallery-style-two  centred amenities ">
                <div class="auto-container">
                    
                    <div class="amenity-title">
                        <div class="amenityname">
                        <h2>The Farmhouses Amenities</h2>
                        </div>
                        <div class="amenitybtn">
                            <a href="index-5.html" class="freerequest"><i class="bi bi-check2-circle"></i>&nbsp;
                            Request More</a>
                        </div>
                    </div>
                    <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one aminities-slider">
                       
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/swimming-pool.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Swimming Pool</h3>
                                    </div>
                                </figure>
                            </div>
                        </div>
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/farm-animal-barnyard.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Farm Animal Barnyard
                                        </h3>
                                        
                                    </div>
            
                                </figure>
                            </div>
                        </div>
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/flower-garden.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Flower Garden
                                        </h3>
                                        
                                    </div>
            
                                </figure>
                            </div>
                        </div>
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/glamping-tent-area.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Glamping Tent Area
                                        </h3>
                                        
                                    </div>
            
                                </figure>
                            </div>
                        </div>
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/outdoor-vip-cinema.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Outdoor VIP Cinema
                                        </h3>
                                        
                                    </div>
            
                                </figure>
                            </div>
                        </div>
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/hydroponic-farm.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Hydroponic Farm
                                        </h3>
                                        
                                    </div>
            
                                </figure>
                            </div>
                        </div>
                        <div class="gallery-block-two">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href=""><img src="{{asset('web-assets/images/amenities/open-green-spaces.jpg')}}" alt=""></a>
                                    <div class="property-card">
                                        <h3 class="text-left invest-price">Open Green Spaces
                                        </h3>
                                        
                                    </div>
            
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section about-property">
                <div class="row">
                    
                    <div class="col-lg-5 property-content">
                        <h2>About The Farmhouses Villas in DAMAC Hills 2</h2>
                        <p>The Farmhouses at Damac Hills 2 is a new development of 5 and 6-bedroom farmhouses
                            located in the heart of Damac Hills 2,
                            Dubai. The community offers a unique blend of luxury living and country charm,
                            with spacious homes,
                            world-class amenities,
                            and stunning views of the surrounding landscape. The Farmhouses are available in two
                            styles: European and North American. European-style farmhouses are inspired by the
                            tranquil meadows of the Netherlands or Belgium,
                            with traditional features such as thatched roofs and exposed beams. North American-style
                            farmhouses are more spacious and suited to the frontier style,
                            with large porches and plenty of room for entertaining. No matter which style you
                            choose,
                            you can be sure to enjoy a luxurious and comfortable lifestyle at The Farmhouses. The
                            homes feature spacious living and dining areas,
                            gourmet kitchens,
                            and luxurious master suites. There is also plenty of space for entertaining,
                            with private gardens and swimming pools.</p>
                    </div>
                    <div class="col-lg-4 content-image"><figure class="image image-1 paroller"><img src="{{asset('web-assets/images/resource/653x685-EN (3).jpg')}}" alt=""></figure>
                       </div>
                        <div class="col-lg-3 content-image">
                            <div class="property-sidebar profile-icon">
                                <div class="author-widget sidebar-widget">
                                    <div class="author-box">
                                        <figure class="author-thumb"><img
                                                src="{{asset('web-assets/images/resource/author-1.jpg')}}" alt=""
                                                width="70"></figure>
                                        <div class="inner">
                                            <h4>Get More About Property <br>From Property expert  </h4>
                                            <div class="btn-box"><a href="property-details.html"
                                                class="theme-btn btn-two">View Profile</a></div>
                                            <div class="main-propertybtn">
                                               
                                                <div class="what-btn"><a href="property-details.html"
                                                        class="theme-btn btn-two whatcall-btn"><i
                                                            class="bi bi-whatsapp"></i></a></div>
                                                <div class="call-btn"><a href="property-details.html"
                                                        class="theme-btn btn-two directcall-btn"><i
                                                            class="bi bi-telephone-inbound"></i></a></div>
                                                <div class="email-btn"><a href="property-details.html"
                                                        class="theme-btn btn-two mailinquiry-btn"><i
                                                            class="bi bi-envelope-check"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            
        </section>
       
        <section class="property-details property-details-two gallery-style-one sec-pad  centred property-galler">
            <div class="container">
            <div class="floor-title">
                <div class="floorplan-heading">
                    {{-- <h5>Style 3</h5> --}}
                    <h2>Floor Plans of DAMAC The Farmhouses Villas</h2>
                </div>
                <div class="sortable-masonry">
                    <div class="filters">
                        <ul class="filter-tabs filter-btns clearfix life-style">
                            <li class="active filter interior-btn">5 Bedroom</li>
                            <li class="filter exterior-btn">6 Bedroom</li>
                            {{-- <li class="filter" data-role="button" data-filter=".interior">Interior</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="floorplan interior">
                <div class="floorplan-image">
                    <img src="{{asset('web-assets/images/resource/5br.jpg')}}" alt="">
                </div>
                <div class="floorplan-bedroom">
                    <h3>5-Bedroom Villa</h3>
                    <p><i class="icon-1">&nbsp;</i><b>Total:</b> 5040 sqft</p>
                    <div class="flor-btn">
                        <a href="index-5.html" class="freefloorplan">Open All Floor Plans</a>
                        <a href="index-5.html" class="freebrochure"><i
                            class="bi bi-cloud-arrow-down">&nbsp;
        
                        </i>Download Brochure</a>
                </div>
            </div>
        </div>
            <div class="floorplan exterior">
                <div class="floorplan-image">
                    <img src="{{asset('web-assets/images/resource/6br.jpg')}}" alt="">
                </div>
                <div class="floorplan-bedroom">
                    <h3>6-Bedroom Villa</h3>
                    <p><i class="icon-1">&nbsp;</i><b>Total:</b> 8387 sqft</p>
                    <div class="flor-btn">
                        <a href="index-5.html" class="freefloorplan">Open All Floor Plans</a>
                        <a href="index-5.html" class="freebrochure"><i
                            class="bi bi-cloud-arrow-down">&nbsp;
        
                        </i>Download Brochure</a>
                </div>
            </div>
        </div>
        </section>
          
                <!-- category-section -->
     
           

            <section class="section about-location">
                    <div class="row">
                        <div class="col-lg-6 property-content property-location">
                            <h2>About Location</h2>
                            <p>Jumeirah Village Circle (JVC), Damac Hills, Downtown Dubai, and Business Bay are strategically situated close by, ensuring convenient connectivity for residents to various destinations. Community schools and hospitality centers are also within quick reach. Embrace a lifestyle of elevated living standards in a location that maximizes life's pleasures.Jumeirah Village Circle (JVC), Damac Hills, Downtown Dubai, and Business Bay are strategically situated close by, ensuring convenient connectivity for residents to various destinations. Community schools and hospitality centers are also within quick reach. Embrace a lifestyle of elevated living standards in a location that maximizes life's pleasures.</p>
                            <div class="download-brochure"><a href="index-5.html" class="freebrochure"><i
                                class="bi bi-cloud-arrow-down">&nbsp;

                            </i>Download Free PDF Brochure</a></div>
                        </div>


                        <div class="col-lg-6 content-image location-name"><h2>DAMAC Hills 2
                            in Dubai</h2><img
                                src="{{asset('web-assets/images/resource/Damac-Hills-2-location.jpg')}}"
                                alt=""></div>
                    </div>
            </section>
                    
            <section class="section nearby-location cta-section advantgaes alternate-2 centred " style="background-image: url({{asset('web-assets/images/background/footer-bg-1.jpg')}});">
                <div class="overlay">
                <div class="container">
                    <h2>Nearby Locations</h2>
                    <div class="parent-type nearby">
                        <div class="property-type nearby-name"> 
                        
                            

                            <i class="bi bi-airplane"></i>
                            <h4><b> 35 Minutes</b> <br>Dubai International Airport</h4>
                        </div>
                        <div class="property-type nearby-name"><i class="bi bi-building-slash"></i>
                            <h4><b>15 Minutes</b><br>Jumeirah Village Circle </h4>
                        </div>
                        <div class="property-type nearby-name"><i class="bi bi-p-circle"></i>
                            <h4><b>25 Minutes</b><br>Dubai Investment Park</h4>
                        </div>
                    </div>
                    <div class="parent-type nearby">
                        <div class="property-type nearby-name"><i class="bi bi-house-down"></i>
                            <h4><b>30 Minutes</b><br>Madinat Jumeirah</h4>
                        </div>
                        <div class="property-type nearby-name"><i class="bi bi-building-slash"></i>
                            <h4><b>37 Minutes</b><br>Mall of the Emirates</h4>
                        </div>
                        <div class="property-type nearby-name"><i class="fas fa-ship    "></i></i>
                            <h4><b>30 Minutes</b><br>to Dubai Marina</h4>
                            
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <!-- gallery-style-one -->
            <section class="section about-location about-developer">
                <div class="row">
                    <div class="col-lg-5 property-content property-location developer">
                        <h2>About Developer</h2>
                        <h3>Damac Properties</h3>
                        <p>Damac Property Developers are renowned creators of luxurious real estate, shaping Dubai's skyline with innovative designs and exceptional craftsmanship. With a portfolio spanning residential, commercial, and leisure properties, Damac is a trusted name synonymous with elegance, quality, and visionary developments that redefine modern living. By establishing a connection with Damac developers, you can become a proud owner of a magnificent new residence within various Damac Properties, strategically situated throughout Dubai. Delve into an array of real estate options at DAMAC Lagoons, DAMAC Hills, and DAMAC Hills 2, and take advantage of enduring prospects for investment.</p>
                        
                    </div>


                    <div class="col-lg-3 content-image location-name developer-name"><img
                            src="{{asset('web-assets/images/resource/damac-developer.png')}}"
                            alt=""></div>
                            <div class="col-lg-4 content-image location-name developer-name"><img
                                src="{{asset('web-assets/images/resource/damac-1.jpg')}}"
                                alt=""></div>
                </div>
        </section>


<section class="place-section sec-pad">
    {{-- <div class="auto-container"> --}}
    <div class="sec-title centred">
        
        <h2>Explore Nearby Area</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore
            magna aliqua enim.</p>
    </div>
    <div class="row areas-parent">
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/Palm-Jebel-Ali.webp')}})">

                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/dubai-hills-estate.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/downtown-dubai.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/downtown-dubai.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row areas-parent next-row">
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/dubai-harbour-3.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/jumeirah-village-circle-scaled-1.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/business-bay_-scaled-1.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/dubai-land.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
</section>
<!-- faq-page-section -->
<section class="faq-page-section property-faq">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                <div class="faq-content-side">
                    <div class="sec-title">
                        <h5>FAQ’S</h5>
                        <h2>Frequently Asked Questions.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor.</p>
                    </div>
                    <ul class="accordion-box">
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                <h5>Do I really need a Realtor when buying a home?</h5>
                            </div>
                            <div class="acc-content current">
                                <div class="content-box">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  laboris nis aliquip ex ea comodo consequat duis aute irure.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                <h5>Can a home depreciate in value?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content-box">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  laboris nis aliquip ex ea comodo consequat duis aute irure.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                             <div class="acc-btn">
                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                <h5>Is an older home as good a value as a new home?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content-box">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  laboris nis aliquip ex ea comodo consequat duis aute irure.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                             <div class="acc-btn">
                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                <h5>Who pays the Realtor fees when buying a home?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content-box">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  laboris nis aliquip ex ea comodo consequat duis aute irure.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                             <div class="acc-btn">
                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                <h5>How much should I offer the sellers?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content-box">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing do eumod tempor incidunt labore dolore magna aliqua enim minim veniam. quis nostrud exercitation  laboris nis aliquip ex ea comodo consequat duis aute irure.</p>
                                    <ul class="list-style-one clearfix">
                                        <li>consectetur elit sed do eius</li>
                                        <li>consectetur elit sed</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="faq-sidebar">
                    <div class="question-inner">
                        <div class="sec-title">
                            <h5>Submit Question</h5>
                            <h3>Ask Your Valuable Questions</h3>
                        </div>
                        <div class="form-inner">
                            <form action="faq.html" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="submit" class="theme-btn btn-one">Send Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-page-section end -->

<!-- trending-section -->
<section class="trending-section trending-project ">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Most Trending Projects in Dubai.</h2>
        </div>
        <div class="parent-categories mb-5 responsive">
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt="">
                    </figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img
                                                    src="{{asset('web-assets/images/feature/author.png')}}" alt="">
                                            </figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>

                                        <div class="pull-right">
                                            <div class="what-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two whatcall-btn"><i
                                                        class="bi bi-whatsapp"></i></a>
                                            </div>
                                            <div class="call-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two directcall-btn"><i
                                                        class="bi bi-telephone-inbound"></i></a>
                                            </div>
                                            <div class="email-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two mailinquiry-btn"><i
                                                        class="bi bi-envelope-check"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt="">
                    </figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img
                                                    src="{{asset('web-assets/images/feature/author.png')}}" alt="">
                                            </figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>

                                        <div class="pull-right">
                                            <div class="what-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two whatcall-btn"><i
                                                        class="bi bi-whatsapp"></i></a>
                                            </div>
                                            <div class="call-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two directcall-btn"><i
                                                        class="bi bi-telephone-inbound"></i></a>
                                            </div>
                                            <div class="email-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two mailinquiry-btn"><i
                                                        class="bi bi-envelope-check"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt="">
                    </figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img
                                                    src="{{asset('web-assets/images/feature/author.png')}}" alt="">
                                            </figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>

                                        <div class="pull-right">
                                            <div class="what-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two whatcall-btn"><i
                                                        class="bi bi-whatsapp"></i></a>
                                            </div>
                                            <div class="call-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two directcall-btn"><i
                                                        class="bi bi-telephone-inbound"></i></a>
                                            </div>
                                            <div class="email-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two mailinquiry-btn"><i
                                                        class="bi bi-envelope-check"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt="">
                    </figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img
                                                    src="{{asset('web-assets/images/feature/author.png')}}" alt="">
                                            </figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>

                                        <div class="pull-right">
                                            <div class="what-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two whatcall-btn"><i
                                                        class="bi bi-whatsapp"></i></a>
                                            </div>
                                            <div class="call-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two directcall-btn"><i
                                                        class="bi bi-telephone-inbound"></i></a>
                                            </div>
                                            <div class="email-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two mailinquiry-btn"><i
                                                        class="bi bi-envelope-check"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt="">
                    </figure>
                    <div class="trending-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author pull-left">
                                            <figure class="author-thumb"><img
                                                    src="{{asset('web-assets/images/feature/author.png')}}" alt="">
                                            </figure>
                                            <h6>Abdul Ahad Siddiq</h6>
                                            <p>Managing Director</p>
                                        </div>

                                        <div class="pull-right">
                                            <div class="what-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two whatcall-btn"><i
                                                        class="bi bi-whatsapp"></i></a>
                                            </div>
                                            <div class="call-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two directcall-btn"><i
                                                        class="bi bi-telephone-inbound"></i></a>
                                            </div>
                                            <div class="email-btn">
                                                <a href="property-details.html"
                                                    class="theme-btn btn-two mailinquiry-btn"><i
                                                        class="bi bi-envelope-check"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="price col-12 text-left mt-2">
                                        <h5><span class="price1">Starting</span> <span class="start1">20,000</span></h5>
                                        <h5 class="price2">Price</h5>
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

                    <section class="subscribe-section bg-color-3">
                        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);">
                        </div>
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                                    <div class="text"><span>Subscribe</span>
                                        <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                                    <div class="form-inner">
                                        <form action="contact.html" method="post" class="subscribe-form">
                                            <div class="form-group"><input type="email" name="email"
                                                    placeholder="Enter your email" required=""><button
                                                    type="submit">Subscribe Now</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    {{-- < !-- subscribe-section end --> --}}
                    @endsection