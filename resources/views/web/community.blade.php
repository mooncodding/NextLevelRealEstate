@extends('webWrapper')
@section('content')
<section class="page-title centred" style="background-image: url({{asset('web-assets/images/resource/download.jpg')}});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1><span class="first">Explore Popular Communities In Dubai</span></h1>
        </div>
    </div>
    
</section>
<section class="team-section  centred sec-pad">
    {{-- <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-1.jpg')}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;"></div> --}}
    <div class="auto-container">
        <div class="sec-title">
            <h5>Dubai Top Rating Developers</h5>
            <h2>Explore Developers</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/emaar-dev-banner.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop">
                            <h4><a href="agents-details.html">Emaar Developer</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/damac-properties-banner.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop" >
                            <h4><a href="agents-details.html">DAMAC Developer</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>    <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/dubai-properties-dev-banner.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop">
                            <h4><a href="agents-details.html">Dubai Properties</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>    <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/mag-dev-banner.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop">
                            <h4><a href="agents-details.html">Mag Developer</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>    <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/emaar-dev-banner.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop">
                            <h4><a href="agents-details.html">Emaar Developer</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>    <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/meraas-banner-e1555568966736.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop">
                            <h4><a href="agents-details.html">Meeras Developer</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>    <div class="team-block-one">
                <div class="inner-box">
                    <figure class="image-box developer-image"><img src="{{asset('web-assets/images/developers/emaar-dev-banner.webp')}}" alt=""></figure>
                    <div class="lower-content">
                        <div class="inner view-prop">
                            <h4><a href="agents-details.html">Emaar Developer</a></h4>
                            <a href="" class="theme-btn btn-one">View Properties</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->
<section class="place-section community">
    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Top Communities</h5>
            <h2>Most Popular Communities</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore
                magna aliqua enim.</p>
        </div>
        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                <div
                    class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration brand marketing software">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img style="height: 600px"
                                    src="{{asset('web-assets/images/areas/Beachfront.png')}}"></figure>
                            <div class="text text-beach">
                                <h4><a href="categories.html">Beach Front Properties</a></h4>



                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all brand illustration print software logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{asset('web-assets/images/areas/Waterfront-Properties-for-Sale-in-Dubai.jpg')}}"
                                    alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Water Front Properties</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{asset('web-assets/images/areas/Dubai-Luxury-Properties-for-Sale.jpg')}}"
                                    alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Dubai Luxury Living</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{asset('web-assets/images/areas/Green-Properties-in-Dubai-for-Sale.jpg')}}"
                                    alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Green Nature Living</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column all illustration marketing logo">
                    <div class="place-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img
                                    src="{{asset('web-assets/images/areas/Properties-Near-Golf-Course-in-Dubai.jpg')}}"
                                    alt=""></figure>
                            <div class="text">
                                <h4><a href="categories.html">Near Golf Course</a></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section about-property choose-area sec-pad">
    <div class="row">
        
        <div class="col-lg-5 property-content why-area">
            <h2>What is<br>Community?</h2>
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
@endsection