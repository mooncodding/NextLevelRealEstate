@extends('webWrapper')
@section('content') 
<!--Page Title-->
 <section class="area-detailbanner project-detailbanner" style="background-image: url({{asset('web-assets/images/areas/morocco-at-damac-lagoons-2.jpg')}});">
   <div class="overlay3">
            <div class="area-details" >
                <div class="row">
                    <div class="col-md-8">
                        <div class="content-box text-left area-bannercontent">
                            <h2>Explore Properties for Sale
                                <br class="head-area">Morocco at Damac Lagoons
                            </h2>
                            <div class="areabanner-btn">
                                <div class="areabanner-inquiry">
                                    <a href="index-5.html" class="theme-btn btn-three banner-btn">All Properties</a>
                                </div>
                                <div class="areaproperty-view">
                                    <a href="contact.html" class="theme-btn btn-one">Get More Info</a>
                                </div>
                            </div>
                            <div class="areamain-pattern">
                                <div class="areabanner-style">
                                    <p><i class="bi bi-wallet2"></i></p>
                                    <p>
                                        <b>Starting Price</b> <br> AED 742,000</p>
                                </div>
                                <div class="areabanner-pattern">
                                    <p> <i class="bi bi-stars"></i></p>
                                    <p>
                                        <b>Conditions</b><br> specials</p>

                                </div>
                                <div class="areabanner-deve">
                                    <p> <i class="bi bi-house-down"></i></p>
                                    <p>
                                        <b>Buy Property</b><br> Directly From a Developer</p>

                                </div>
                             
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-btn prop-btn area-btn">
                            <div class="video-btn"><a href="https://www.youtube.com/watch?v=Kn615acNlTw"
                                class="lightbox-image" data-caption=""><i class="icon-17"></i></a></div>
                            <div class="banner-inquiry prop-call"><a href="index-5.html" class="property-btn">Video About New Project</a></div>
                           
                        </div>
                        {{-- <div class="inquiry-btnform">
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
                        </div> --}}
                     </div> 
             </div>
            </div>
    </div>

</section>
<!--End Page Title-->

<!-- search-field-section -->
<section class="search-field-section">
    <div class="auto-container">
        <div class="inner-container area-search">
            <div class="search-field">
                <div class="tabs-box">
                    {{-- <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons centred clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-1">BUY</li>
                            <li class="tab-btn" data-tab="#tab-2">RENT</li>
                            <li class="tab-btn" data-tab="#tab-3">Sale</li>
                        </ul>
                    </div> --}}
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
<!-- feature-section -->
<section class="feature-section sec-pad area-properties ">
    <div class="auto-container area-container">
        <div class="sec-title">
            <h2><span>Buy Similar Property in DAMAC Lagoons
            </span></h2>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4>
                                <hr class="areaproperty-line">
                            <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4>
                                <hr class="areaproperty-line">
                            <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4>
                                <hr class="areaproperty-line">
                            <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4>
                                <hr class="areaproperty-line">
                            <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Villa on Grand Avenue</a></h4>
                                <hr class="areaproperty-line">
                            <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 30,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-2.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Contemporary Apartment</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 45,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
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
                            {{-- <div class="author-info clearfix">
                                <div class="author pull-left">
                                    <figure class="author-thumb"><img src="{{asset('web-assets/images/feature/author-3.jpg')}}" alt=""></figure>
                                    <h6>Emaar</h6>
                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">Off plan</a></div>
                            </div> --}}
                            <div class="title-text"><h4><a href="/propertyDetails">Luxury Villa With Pool</a></h4>
                                <hr class="areaproperty-line">
                                <h6>Downtown Dubai</h6>
                            </div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>AED 63,000.00</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a href="property-details.html"><i class="icon-12"></i></a></li>
                                    <li><a href="property-details.html"><i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>3 Beds</li>
                                <li><i class="icon-15"></i>2 Baths</li>
                                <li><i class="icon-16"></i>600 Sq Ft</li>
                            </ul>
                            <div class="main-propertybtn">
                                <div class="btn-box">
                                    <a href="property-details.html" class="theme-btn btn-two">See
                                        Details</a>
                                </div>
                                <div class="what-btn">
                                    <a href="property-details.html" class="theme-btn btn-two whatcall-btn"><i
                                            class="bi bi-whatsapp"></i></a>
                                </div>
                                <div class="call-btn">
                                    <a href="property-details.html" class="theme-btn btn-two directcall-btn"><i
                                            class="bi bi-telephone-inbound"></i></a>
                                </div>
                                <div class="email-btn">
                                    <a href="property-details.html" class="theme-btn btn-two mailinquiry-btn"><i
                                            class="bi bi-envelope-check"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-btn text-center mt-5">
            <a href="" class="theme-btn btn-one">Load More &nbsp; &nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
        </div>
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
<section class="main-paymentplan">
    <h2 class="paymentplan-h2">Morocco at Damac Lagoons <br>Payment plans.</h2>
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
  
<section class="section about-property choose-area sec-pad">
    <div class="row">
        
        <div class="col-lg-5 property-content why-area">
            <h2>Why Choose<br>Morocco at Damac Lagoons</h2>
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
<section class="category-section centred property-overview area-nearby">
    <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <ul class="category-list clearfix over">
            <li>
                <div class="category-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><img
                            src="{{asset('web-assets/images/resource/download.png')}}" alt=""
                           ></div>
                        <h5>10 Minutes</h5>
                        <h6>to The Dubai Mall</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="category-block-two">
                    <div class="inner-box">
                        <div class="icon-box">  <img
                            src="{{asset('web-assets/images/resource/dubaimarina.png')}}" alt=""
                           ></div>
                        <h5>25 Minutes                        </h5>
                        <h6>to Dubai Marina


                        </h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="category-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><img
                            src="{{asset('web-assets/images/resource/aeroplane.png')}}" alt=""
                           ></div>
                        <h5>45 Minutes
                        </h5>
                        <h6>to DXB Airport


                        </h6>
                    </div>
                </div>
            </li>                
            <li>
                <div class="category-block-two">
                    <div class="inner-box">
                        <div class="icon-box"><img src="{{asset('web-assets/images/resource/airport.png')}}" alt=""></div>
                        <h5>35 Minutes

                      </h5>
                        <h6>to DWC Airport

                        </h6>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="areas-slider">
<div class="carousel-inner">
    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none">
        <figure class="image-box"><img src="{{asset('web-assets/images/resource/areabanner1.jpg')}}" alt=""></figure>
        <figure class="image-box"><img src="{{asset('web-assets/images/resource/areabanner2.jpg')}}" alt=""></figure>
        <figure class="image-box"><img src="{{asset('web-assets/images/resource/areabanner3.jpg')}}" alt=""></figure>
    </div>
</div>
</section>

<!-- team-section -->
<section class="team-section  centred area-team ">
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

<section class="section about-location buy-guide">
    <div class="row">
        <div class="col-lg-6 property-content property-location">
            <h2>How to Buy</h2>
            <h4>Property in Downtown Dubai?</h4>
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
                src="{{asset('web-assets/images/resource/img-4.jpg')}}"
                alt=""></div>
    </div>
</section>
<!-- faq-page-section -->
<section class="faq-page-section property-faq area-faq">
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
<section class="trending-section area-trending ">
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


<!--Developers Section-->
<section class="clients-section ">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>Developers in Downtown Dubai</h2>
        </div>
        <div class="customer-logos slider">
            <div class="slide"><img src="{{asset('web-assets/images/developers/azizi.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/danube.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/deyaar.jpg')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/ellington.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/sobha.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/gemini.png')}}"></div>
            <div class="slide"><img src="{{asset('web-assets/images/developers/maars.png')}}"></div>
        </div>
    </div>
</section>
<!--Developer Section End-->



<!-- areas-section start -->
<section class="place-section areas-details">
    {{-- <div class="auto-container"> --}}
    <div class="sec-title centred">
        <h5>Top Areas</h5>
        <h2>Most Popular Area</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore
            magna aliqua enim.</p>
    </div>
    <div class="row areas-parent">
        <div class="col-lg-6">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/Palm-Jebel-Ali.webp')}})">

                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/dubai-hills-estate.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
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
        <div class="col-lg-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/dubai-harbour-3.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/jumeirah-village-circle-scaled-1.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="promo-box">
                <div class="area-one"
                    style=" background-image: url({{asset('web-assets/images/areas/business-bay_-scaled-1.jpg')}})">
                    <h4 class="area-name">Palm Jebel Ali</h4>
                    <h5 class="area-price">Price from 50,000,000 AED</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
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
<!-- areas-section end -->
<!-- cta-section -->
<section class="cta-section bg-color-2 sec-pad">
    <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text pull-left">
                <h2>Our Expert Will Help You</h2>
                <p>Feel Free to Contact Us at Any Time, We Online 24/7</p>
            </div>
            <div class="btn-box pull-right">
                <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->

@endsection