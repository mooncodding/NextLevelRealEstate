@extends('webWrapper')
@section('content')
        <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{asset('web-assets/images/background/agents-banner.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>Explore Our Agents</h1>
                    <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar agent-sidebar agentlistform">
                        <div class="agents-search sidebar-widget">
                                
                                <div class="search-inner">
                                    <form action="agents-list.html">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Enter Agent Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="All Categories">All Categories</option>
                                                   <option value="1">New Arrival</option>
                                                   <option value="2">Top Rated</option>
                                                   <option value="3">Most Search</option>
                                                   <option value="4">Recent Place</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="All Cities">All Cities</option>
                                                   <option value="1">New York</option>
                                                   <option value="2">California</option>
                                                   <option value="3">London</option>
                                                   <option value="4">Maxico</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-one">Search Agent</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- agents-page-section -->
        <section class="agents-page-section agents-grid">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar agent-sidebar">
                        <!-- <div class="agents-search sidebar-widget">
                                <div class="widget-title">
                                    <h5>Find Agent</h5>
                                </div>
                                <div class="search-inner">
                                    <form action="agents-list.html">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Enter Agent Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="All Categories">All Categories</option>
                                                   <option value="1">New Arrival</option>
                                                   <option value="2">Top Rated</option>
                                                   <option value="3">Most Search</option>
                                                   <option value="4">Recent Place</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="All Cities">All Cities</option>
                                                   <option value="1">New York</option>
                                                   <option value="2">California</option>
                                                   <option value="3">London</option>
                                                   <option value="4">Maxico</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="theme-btn btn-one">Search Agent</button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Status Of Property</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <li><a href="/properties">Property For Rent <span>(200)</span></a></li>
                                    <li><a href="/properties">Property For Sale <span>(300)</span></a></li>
                                    <li><a href="/properties">Property For Buy <span>(400)</span></a></li>
                                    <li><a href="/properties">Off Plan Property For Rent <span>(500)</span></a></li>
                                    <li><a href="/properties">Off Plan Property For Sale<span>(600)</span></a></li>
                                    <li><a href="/properties">Off Plan Property For Buy<span>(700)</span></a></li>
                                </ul>
                            </div>
                            <div class="featured-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Featured Properties</h5>
                                </div>
                                <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Villa on Grand Avenue</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('web-assets/images/feature/feature-2.png')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Contemporary Apartment</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="{{asset('web-assets/images/feature/feature-3.png')}}" alt=""></figure>
                                                <div class="batch"><i class="icon-11"></i></div>
                                                <span class="category">Featured</span>
                                            </div>
                                            <div class="lower-content">
                                                <div class="title-text"><h4><a href="property-details.html">Luxury Villa With Pool</a></h4></div>
                                                <div class="price-box clearfix">
                                                    <div class="price-info">
                                                        <h6>Start From</h6>
                                                        <h4>$30,000.00</h4>
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                <div class="btn-box"><a href="property-details.html" class="theme-btn btn-two">See Details</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="agents-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                                </div>
                                <div class="right-column pull-right clearfix">
                                    <div class="short-box clearfix">
                                        <div class="select-box">
                                            <select class="wide">
                                               <option data-display="Sort by: Newest">Sort by: Newest</option>
                                               <option value="1">New Arrival</option>
                                               <option value="2">Top Rated</option>
                                               <option value="3">Offer Place</option>
                                               <option value="4">Most Place</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="short-menu clearfix">
                                        <button class="list-view"><i class="icon-35"></i></button>
                                        <button class="grid-view on"><i class="icon-36"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper grid">
                                <div class="agents-list-content">
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-1.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="/agentDetails">Abdul Ahad Siddiq</a></h4>
                                                        <span class="designation">Managing Director</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                <div class="btn-box">
                                                    <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                    <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-2.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="/agentDetails">Salwa Arfaoui</a></h4>
                                                        <span class="designation">Sales Director</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                {{-- <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul> --}}
                                                <div class="btn-box">
                                                    <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                    <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-3.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="/agentDetails">Benedict Cumbatch</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                {{-- <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:benedict@realshed.com">benedict@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul> --}}
                                                <div class="btn-box">
                                                    <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                    <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-4.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="/agentDetails">Elizabeth Winstead</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                {{-- <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:winstead@realshed.com">winstead@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul> --}}
                                                <div class="btn-box">
                                                    <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                    <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-5.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="/agentDetails">Morgan Bale</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                {{-- <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:bale@realshed.com">bale@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul> --}}
                                                <div class="btn-box">
                                                    <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                    <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agents-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-1.jpg')}}" alt=""></figure>
                                            <div class="content-box">
                                                <div class="upper clearfix">
                                                    <div class="title-inner pull-left">
                                                        <h4><a href="/agentDetails">Jennifer Gal</a></h4>
                                                        <span class="designation">Modern House Real Estate Agent</span>
                                                    </div>
                                                    <ul class="social-list pull-right clearfix">
                                                        <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                        <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="text">
                                                    <p>Get the oars in the water and start rowing. Execution is the single biggest factor...</p>
                                                </div>
                                                {{-- <ul class="info clearfix">
                                                    <li><i class="fab fa fa-envelope"></i><a href="mailto:jennifer@realshed.com">jennifer@realshed.com</a></li>
                                                    <li><i class="fab fa fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                                                </ul> --}}
                                                <div class="btn-box">
                                                    <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                    <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agents-grid-content grid-item">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-1.jpg')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="/agentDetails">Abdul Ahad Siddiq</a></h4>
                                                            <span class="designation">Managing Director</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-2.jpg')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="/agentDetails">Salwa Arfaoui</a></h4>
                                                            <span class="designation">Sales Director</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-3.jpg')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="/agentDetails">Elizabeth Winstead</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-4.jpg')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="/agentDetails">Benedict Cumbatch</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-5.jpg')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="/agentDetails">Morgan Bale</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 agents-block">
                                            <div class="agents-block-two">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-1.jpg')}}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="title-inner">
                                                            <h4><a href="/agentDetails">Jennifer Gal</a></h4>
                                                            <span class="designation">Modern House Real Estate Agent</span>
                                                        </div>
                                                        <div class="text">
                                                            <p>Get the oars in the water and start rowing execution.</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="agents-grid.html" class="current">1</a></li>
                                    <li><a href="agents-grid.html">2</a></li>
                                    <li><a href="agents-grid.html">3</a></li>
                                    <li><a href="agents-grid.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agents-page-section end -->
        <section class="section about-location buy-guide area-off">
    <div class="row">
        <div class="col-lg-6 property-content property-location">
            <h2>About Dubai Agents</h2>
            <h4>Our Top Agents</h4>
            <div class="line mt-3"></div>
            <p>If you want to buy off-plan property by Emaar Properties you should know a few things beforehand. For example, Emaar Properties offers frequently great deals in Dubai market.
                <br><br>
                Today, Dubai's best areas by Emaar such as Emaar Beachfront, Downtown Dubai and Dubai Hills Estate are considered to be one of the most popular residential, tourist and business destinations.
                <br><br>
                Purchasing an off-plan apartment such as Emaar IL Primo comes with many benefits. For a start, off-plan property is cheaper than ready one providing high returns of investments (ROI) too.
                <br><br>
                Moreover, Emaar features many attractive offers including easy payment plan, DLD fees waiver or free of service charge.
                <br><br>
                In addition, Emaar's off-plan property is a good investment as well, given that the prices of real estate in Dubai remain stable and favorable for buyers and investors.</p>
            <div class="download-brochure"><a href="index-5.html" class="freebrochure">Get Free Area Guide</a></div>
        </div>


        <div class="col-lg-6 content-image location-name"><img
                src="{{asset('web-assets/images/resource/agentss.jpg')}}"
                alt=""></div>
    </div>
</section>

        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-2.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>Subscribe</span>
                            <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->
    
@endsection