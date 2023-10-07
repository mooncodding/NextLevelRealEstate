@extends('webWrapper')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('web-assets/images/resource/download.jpg')}});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1><span class="first">EMAAR BEACHFRONT</span></h1>
        </div>
    </div>
</section>
<section class="category-section centred property-overview">
    <h2> Overview</h2>
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
<!-- gallery-style-one -->
<section class="gallery-style-one centred sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            {{-- <h5>Style 3</h5> --}}
            <h2>Explore Properties in Emaar Beachfront by types</h2>
        </div>
        <div class="sortable-masonry">
            <div class="filters">
                <ul class="filter-tabs filter-btns clearfix life-style">
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
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}"
                                        alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-2.jpg')}}" class="lightbox-image"
                                    data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span
                                                        class="start1 responsive">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp; PECHS Block 6
                                            Karachi, Pakistan</span><br>
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
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}"
                                        alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-3.jpg')}}" class="lightbox-image"
                                    data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span
                                                        class="start1 responsive">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp; PECHS Block 6
                                            Karachi, Pakistan</span><br>
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
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}"
                                        alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-2.jpg')}}" class="lightbox-image"
                                    data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span
                                                        class="start1 responsive">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp; PECHS Block 6
                                            Karachi, Pakistan</span><br>
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
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}"
                                        alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-3.jpg')}}" class="lightbox-image"
                                    data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span
                                                        class="start1 responsive">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp; PECHS Block 6
                                            Karachi, Pakistan</span><br>
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
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-2.jpg')}}"
                                        alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-2.jpg')}}" class="lightbox-image"
                                    data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span
                                                        class="start1 responsive">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp; PECHS Block 6
                                            Karachi, Pakistan</span><br>
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
                                <figure class="image"><img src="{{asset('web-assets/images/resource/place-3.jpg')}}"
                                        alt=""></figure>
                                <a href="{{asset('web-assets/images/resource/place-3.jpg')}}" class="lightbox-image"
                                    data-fancybox="gallery"><i class="icon-31"></i></a>
                                <div class="gallary-box">
                                    <div class="gallary-card">
                                        <div class="author-info clearfix">
                                            <div class="author">
                                                <h5><span class="price1">Starting Price</span> <span
                                                        class="start1 responsive">40,000</span></h5>
                                            </div>
                                        </div>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i><span>&nbsp; PECHS Block 6
                                            Karachi, Pakistan</span><br>
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
        <!-- feature-style-three -->
        <section class="feature-style-three centred ">
            <div class="auto-container">
                <div class="sec-title">
                  
                    <h2>Key Benefits Of Emaar Beachfront</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one keys-benefits">
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h4>Excellent Reputation</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Best Local Agents</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Personalized Service</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h4>Excellent Reputation</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Best Local Agents</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Personalized Service</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-1"></i></div>
                            <h4>Excellent Reputation</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Best Local Agents</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                    <div class="feature-block-two">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <h4>Personalized Service</h4>
                            <p>Lorem ipsum dolor sit consectetur sed eiusm tempor incididunt dolore magna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->
        <section class="section about-property choose-area sec-pad">
            <div class="row">
                
                <div class="col-lg-5 property-content why-area">
                    <h2>About Developer</h2>
                    <hr class="areaproperty-line">
                    <p>From the world's largest shopping and entertainment destination, The Dubai Mall, to the tranquil surrounding of the more intimate Souk Al Bahar, Downtown Dubai is a lifestyle destination set in a distinct mix of traditional and modern architecture where people live, work and play.
                        From the world's largest shopping and entertainment destination, The Dubai Mall, to the tranquil surrounding of the more intimate Souk Al Bahar, Downtown Dubai is a lifestyle destination set in a distinct mix of traditional and modern architecture where people live, work and play.
                        From the world's largest shopping and entertainment destination.
                    </p>
                </div>
                <div class="col-lg-5 content-image"><figure class="image image-1 paroller"><img src="{{asset('web-assets/images/resource/Downtown-Dubai.jpg')}}" alt=""></figure>
                   </div>
                    <div class="col-lg-2 content-image">
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
<!-- gallery-style-one end -->
<section class="blog-section sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Latest News About Emaar Beachfront</h2>
            <div class="line mt-3"></div>
        </div>
        <div class="parent-categories mb-5">
            <div class="category-btn blogs">
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt="">
                    </figure>
                    <div class="blog-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author">
                                            <h6>How Investing in Emaar Properties will give you Amazing Profits in 2023
                                            </h6>
                                            <p>Emaar Properties reported a profit after expenses worth Dh6.8 billion in
                                                2022 for the financial</p>
                                            <div class="btn-box pt-2">
                                                <a href="" class="theme-btn btn-one">Continue Reading &nbsp; &nbsp;<i
                                                        aria-hidden="true" class="fas fa-arrow-right"></i></a>
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt="">
                    </figure>
                    <div class="blog-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author">
                                            <h6>Dubai’s Top 10 Schools for Academic Excellence and Future Leaders</h6>
                                            <p>In case you want a list of top schools in Dubai that are offering high
                                                quality of education and</p>
                                            <div class="btn-box pt-2">
                                                <a href="" class="theme-btn btn-one">Continue Reading &nbsp; &nbsp;<i
                                                        aria-hidden="true" class="fas fa-arrow-right"></i></a>
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
                    <figure class="image-box"><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt="">
                    </figure>
                    <div class="blog-inner">
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="author">
                                            <h6>Why 2-bedroom apartments are high demand in Dubai?</h6>
                                            <p>The requirement for apartments significantly increased. As residents
                                                looked for more independent</p>

                                            <div class="btn-box pt-2">
                                                <a href="" class="theme-btn btn-one">Continue Reading &nbsp; &nbsp;<i
                                                        aria-hidden="true" class="fas fa-arrow-right"></i></a>
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
            <a href="" class="theme-btn btn-one">All Blogs &nbsp; &nbsp;<i aria-hidden="true"
                    class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>
@endsection