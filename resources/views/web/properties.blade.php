@extends('webWrapper')
@section('content')
    <!--Page Title-->
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('web-assets/images/shape/shape-9.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('web-assets/images/shape/shape-10.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Property List</h1>
             
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <!-- gallery-style-two -->
{{-- <section class="gallery-style-two sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Featured Projects</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-3.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-2.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
            <div class="gallery-block-two">
                <div class="inner-box">
                    <figure class="image-box">
                        <a href=""><img src="{{asset('web-assets/images/trending/image-1.jpg')}}" alt=""></a>
                        <div class="property-card">
                            <h3 class="text-left invest-price">Propery One</h3>
                            <h5><span class="price1 top-price">Starting Price</span> <span
                                    class="start1 responsive top-num">40,000</span>
                            </h5>
                            <div class="top-property">
                                <div class="what-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn top">
                                    <a href="/propertyDetails" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>

                    </figure>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- gallery-style-two end -->
    <!-- search-field-section -->
<section class="search-field-section">
    <div class="auto-container">
        <div class="inner-container search-position">
            {{-- <div class="search-field">
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
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
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
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
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
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
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
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
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
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
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
                                <div class="switch_btn_one">
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
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
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
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
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
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
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
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
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
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
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
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
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
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
            </div> --}}
            <div class="search-field">
                <div class="tabs-box">
                    <!-- <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">BUY</li>
                            <li class="tab-btn" data-tab="#tab-2">RENT</li>
                            <li class="tab-btn" data-tab="#tab-3">Sale</li>
                        </ul>
                    </div> -->
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
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
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
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
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
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
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
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
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
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
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
                                <div class="switch_btn_one">
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
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
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
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
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
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
                                                        <input type="search" name="search-field"
                                                            placeholder="Search by Property, Location or Landmark..."
                                                            required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 column">
                                                <div class="form-group">
                                                    <label>Location</label>
                                                    <div class="select-box">
                                                        <i class="far fa-compass"></i>
                                                        <select class="wide">
                                                            <option data-display="Input location">Input location
                                                            </option>
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
                                    <button
                                        class="nav-btn nav-toggler navSidebar-button clearfix search__toggler">Advanced
                                        Search<i class="fas fa-angle-down"></i></button>
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
                                                            <option data-display="Distance from Location">Distance from
                                                                Location</option>
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
                                                            <div class="input"><input type="text"
                                                                    class="property-amount" name="field-name"
                                                                    readonly=""></div>
                                                        </div>
                                                        <div class="price-range-slider"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                    <div class="area-range">
                                                        <h6>Select Area</h6>
                                                        <div class="range-input">
                                                            <div class="input"><input type="text" class="area-range"
                                                                    name="field-name" readonly=""></div>
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
     <!-- property-page-section -->
     <section class="property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix list-width">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    {{-- <div class="default-sidebar property-sidebar">
                        <div class="filter-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>Property</h5>
                            </div>
                            <div class="widget-content">
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="All Type">All Type</option>
                                       <option value="1">Villa</option>
                                       <option value="2">Commercial</option>
                                       <option value="3">Residential</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="Select Location">Select Location</option>
                                       <option value="1">New York</option>
                                       <option value="2">California</option>
                                       <option value="3">London</option>
                                       <option value="4">Maxico</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="This Area Only">This Area Only</option>
                                       <option value="1">New York</option>
                                       <option value="2">California</option>
                                       <option value="3">London</option>
                                       <option value="4">Maxico</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="All Type">Max Rooms</option>
                                       <option value="1">2+ Rooms</option>
                                       <option value="2">3+ Rooms</option>
                                       <option value="3">4+ Rooms</option>
                                       <option value="4">5+ Rooms</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="Most Popular">Most Popular</option>
                                       <option value="1">Villa</option>
                                       <option value="2">Commercial</option>
                                       <option value="3">Residential</option>
                                    </select>
                                </div>
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="All Type">Select Floor</option>
                                       <option value="1">2x Floor</option>
                                       <option value="2">3x Floor</option>
                                       <option value="3">4x Floor</option>
                                    </select>
                                </div>
                                <div class="filter-btn">
                                    <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="price-filter sidebar-widget">
                            <div class="widget-title">
                                <h5>Select Price Range</h5>
                            </div>
                            <div class="range-slider clearfix">
                                <div class="clearfix">
                                    <div class="input">
                                        <input type="text" class="property-amount" name="field-name" readonly="">
                                    </div>
                                </div>
                                <div class="price-range-slider"></div>
                            </div>
                        </div>
                        <div class="category-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>Status Of Property</h5>
                            </div>
                            <ul class="category-list clearfix">
                                <li><a href="/propertyDetails">For Rent <span>(200)</span></a></li>
                                <li><a href="/propertyDetails">For Sale <span>(700)</span></a></li>
                            </ul>
                        </div>
                        <div class="category-widget sidebar-widget">
                            <div class="widget-title">
                                <h5>Amenities</h5>
                            </div>
                            <ul class="category-list clearfix">
                                <li><a href="/propertyDetails">Air Conditioning <span>(17)</span></a></li>
                                <li><a href="/propertyDetails">Central Heating <span>(4)</span></a></li>
                                <li><a href="/propertyDetails">Cleaning Service <span>(12)</span></a></li>
                                <li><a href="/propertyDetails">Dining Room <span>(8)</span></a></li>
                                <li><a href="/propertyDetails">Dishwasher <span>(5)</span></a></li>
                                <li><a href="/propertyDetails">Dishwasher <span>(2)</span></a></li>
                                <li><a href="/propertyDetails">Family Room <span>(19)</span></a></li>
                                <li><a href="/propertyDetails">Onsite Parking <span>(11)</span></a></li>
                                <li><a href="/propertyDetails">Fireplace <span>(7)</span></a></li>
                                <li><a href="/propertyDetails">Hardwood Flows <span>(9)</span></a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="featured-widget post-widget">
                        <div class="widget-title">
                            <h5>Featured Properties</h5>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one featured-slider">
                            <div class="feature-block-one">
                                <div class="inner-box">
                                    <div class="image-box ">
                                        <figure class="image"><img src="{{asset('web-assets/images/feature/feature-1.png')}}" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
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
                                        <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
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
                                        <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info">
                                                <h6>Start From</h6>
                                                <h4>$30,000.00</h4>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                        <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">
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
                                    <button class="list-view on"><i class="icon-35"></i></button>
                                    <button class="grid-view"><i class="icon-36"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="wrapper list">
                            <div class="deals-list-content list-item">
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('web-assets/images/resource/image1.jpg')}}" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="/propertyDetails">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$30,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                    <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('web-assets/images/resource/image2.jpg')}}" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="/propertyDetails">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$20,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                    <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('web-assets/images/resource/image3.jpg')}}" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="/propertyDetails">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$35,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                    <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('web-assets/images/resource/image4.jpg')}}" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="/propertyDetails">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="/propertyDetails">Apartment in Glasgow</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$45,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                    <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <figure class="image"><img src="{{asset('web-assets/images/resource/image5.jpg')}}" alt=""></figure>
                                            <div class="batch"><i class="icon-11"></i></div>
                                            <span class="category">Featured</span>
                                            <div class="buy-btn"><a href="/propertyDetails">For Buy</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="title-text"><h4><a href="/propertyDetails">Family Home For Sale</a></h4></div>
                                            <div class="price-box clearfix">
                                                <div class="price-info pull-left">
                                                    <h6>Start From</h6>
                                                    <h4>$40,000.00</h4>
                                                </div>
                                                <div class="author-box pull-right">
                                                    <figure class="author-thumb"> 
                                                        <img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt="">
                                                        <span>Michael Bean</span>
                                                    </figure>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing sed eiusm do tempor incididunt labore.</p>
                                            <ul class="more-details clearfix">
                                                <li><i class="icon-14"></i>3 Beds</li>
                                                <li><i class="icon-15"></i>2 Baths</li>
                                                <li><i class="icon-16"></i>600 Sq Ft</li>
                                            </ul>
                                            <div class="other-info-box clearfix">
                                                <div class="btn-box pull-left"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                <ul class="other-option pull-right clearfix">
                                                    <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                    <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="deals-grid-content grid-item">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('web-assets/images/feature/feature-4.jpg')}}" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt=""></figure>
                                                            <h6>Michael Bean</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="/propertyDetails">For Buy</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$30,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                            <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('web-assets/images/feature/feature-4.jpg')}}" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                                            <h6>Robert Niro</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="/propertyDetails">For Rent</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$45,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                            <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('web-assets/images/feature/feature-4.jpg')}}" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                                            <h6>Keira Mel</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="/propertyDetails">Sold Out</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$63,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                            <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('web-assets/images/feature/feature-4.jpg')}}" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-1.jpg')}}" alt=""></figure>
                                                            <h6>Michael Bean</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="/propertyDetails">For Buy</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="/propertyDetails">Home in Merrick Way</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$30,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                            <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('web-assets/images/feature/feature-5.jpg')}}" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                                            <h6>Robert Niro</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="/propertyDetails">For Rent</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="/propertyDetails">Apartment in Glasgow</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$45,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                            <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image"><img src="{{asset('web-assets/images/feature/feature-6.jpg')}}" alt=""></figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <span class="category">Featured</span>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="author-info clearfix">
                                                        <div class="author pull-left">
                                                            <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                                            <h6>Keira Mel</h6>
                                                        </div>
                                                        <div class="buy-btn pull-right"><a href="/propertyDetails">Sold Out</a></div>
                                                    </div>
                                                    <div class="title-text"><h4><a href="/propertyDetails">Family Home For Sale</a></h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Start From</h6>
                                                            <h4>$63,000.00</h4>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li><a href="/propertyDetails"><i class="icon-12"></i></a></li>
                                                            <li><a href="/propertyDetails"><i class="icon-13"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed.</p>
                                                    <ul class="more-details clearfix">
                                                        <li><i class="icon-14"></i>3 Beds</li>
                                                        <li><i class="icon-15"></i>2 Baths</li>
                                                        <li><i class="icon-16"></i>600 Sq Ft</li>
                                                    </ul>
                                                    <div class="btn-box"><a href="/propertyDetails" class="theme-btn btn-two">See Details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-wrapper">
                            <ul class="pagination clearfix">
                                <li><a href="property-list.html" class="current">1</a></li>
                                <li><a href="property-list.html">2</a></li>
                                <li><a href="property-list.html">3</a></li>
                                <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property-page-section end -->
<!-- place-section -->
<section class="place-section sec-pad community">
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
<!-- place-section end -->
<section class="section about-property choose-area">
    <div class="row">
        
        <div class="col-lg-5 property-content why-area">
            <h2>What is<br>Offplan?</h2>
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
                                <div class="btn-box"><a href="/propertyDetails"
                                    class="theme-btn btn-two">View Profile</a></div>
                                <div class="main-propertybtn">
                                   
                                    <div class="what-btn"><a href="/propertyDetails"
                                            class="theme-btn btn-two whatcall-btn"><i
                                                class="bi bi-whatsapp"></i></a></div>
                                    <div class="call-btn"><a href="/propertyDetails"
                                            class="theme-btn btn-two directcall-btn"><i
                                                class="bi bi-telephone-inbound"></i></a></div>
                                    <div class="email-btn"><a href="/propertyDetails"
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
<section class="section about-location buy-guide area-off">
    <div class="row">
        <div class="col-lg-6 property-content property-location">
            <h2>How to Buy</h2>
            <h4>Property in offplan?</h4>
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
                src="{{asset('web-assets/images/resource/offplan.webp')}}"
                alt=""></div>
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
<section class="deals-section sec-pad video-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h2><span>Popular Videos  </span></h2>
            <div class="line mt-3"></div>
        </div>
        <div class="deals-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <iframe width="570" height="310" src="https://www.youtube.com/embed/pL08bOm-KgE" title="Overview of DAMAC Lagoons in Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-overi">
                        <h4>Damac Lagoons</h4>
                        <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                                        class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <iframe width="570" height="310" src="https://www.youtube.com/embed/J0Pe-V-gFAI" title="Madinat Jumeirah Living Apartments for Sale: New Phase Coming Soon 🇦🇪" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <div class="video-overi">
                                    <h4>Damac Lagoons</h4>
                                    <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                                                    class="fas fa-arrow-right"></i></a>
                            
                            </div>
                            
                                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <iframe width="570" height="310" src="https://www.youtube.com/embed/pL08bOm-KgE" title="Overview of DAMAC Lagoons in Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-overi">
                        <h4>Damac Lagoons</h4>
                        <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                                        class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <iframe width="570" height="310" src="https://www.youtube.com/embed/J0Pe-V-gFAI" title="Madinat Jumeirah Living Apartments for Sale: New Phase Coming Soon 🇦🇪" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <div class="video-overi">
                            <h4>Damac Lagoons</h4>
                            <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                                            class="fas fa-arrow-right"></i></a>
                    
                    </div>
                      
                                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <iframe width="570" height="310" src="https://www.youtube.com/embed/pL08bOm-KgE" title="Overview of DAMAC Lagoons in Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-overi">
                        <h4>Damac Lagoons</h4>
                        <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                                        class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <iframe width="570" height="310" src="https://www.youtube.com/embed/pL08bOm-KgE" title="Overview of DAMAC Lagoons in Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="video-overi">
                                <h4>Damac Lagoons</h4>
                                <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                                                class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form-section sec-pad " style="background-image: url({{asset('web-assets/images/resource/banner-management.webp')}});">
       
    <div class="auto-container overlay6">
     
        <div class="row">
        <div class="col-8">
            <div class="form-box">
                <div class="sec-title">                      
                    <h3>
Top-Notch Rental Property Management Experts</h3>
                    <p class="pt-3">We pride ourselves on our proactive approach, anticipating and addressing potential issues before they arise. From tenant screening and lease agreements to property maintenance and rent collection, we manage every detail with efficiency and attention to detail.</p>
                    <h3>
                    Advantages
</h3>
                    <p class="pt-3">Help In Examined And Presenting Your Property To Potential Buyers Or Tenants.
RERA-Certified Team Will Take Care Of Your Home And Protect The Value Of Asset.
Bring Tenants On Your Property With Occupancy Rates Of 96% On Average</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="property-sidebar management default-sidebar">
                <div class="author-widget sidebar-widget">
                    <!-- <div class="author-box">
                        <figure class="author-thumb"><img src="{{asset('web-assets/images/team/team-1.jpg')}}" alt=""></figure>
                        <div class="inner">
                            <h4>Abdul Ahad Siddiq</h4>
                            <p>Managing Director</p>
                            {{-- <ul class="info clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>84 St. John Wood High Street, 
                                St Johns Wood</li>
                                <li><i class="fas fa-phone"></i><a href="tel:03030571965">030 3057 1965</a></li>
                            </ul> --}}
                            <div class="btn-box mt-5">
                                <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                <a href="/agentDetails" class="theme-btn btn-two btn-from-whatsapp"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-inner">
                        <form action="/propertyDetails" method="post" class="default-form">
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
        </div>
        </div>
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