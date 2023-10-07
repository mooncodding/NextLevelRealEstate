@extends('webWrapper')
@section('content')

        <!--Page Title-->
        <section class="page-title about-ushead centred" style="background-image: url({{asset('web-assets/images/background/about-banner.jpg')}});">
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>About Us</h1>
                </div>
            </div>
        </section>
        <!--End Page Title-->
        <!-- about-company -->
        <section class="about-section about-page sec-pad">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column company-image">
                            <div class="image_block_1">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('web-assets/images/resource/about-company.jpg')}}" alt=""></figure>
                                    <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <h2>About</h2>
                                        <h4>Our  Company</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column companydetail">
                            <div class="content_block_3">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <h5>Next Level Real Estate</h5>
                                        <h3>Company Detail</h3>
                                       
                                    </div>
                                    <div class="text">
                                        <p>Next Level Real Estate was established in 2013 and has been the driving force behind some of the greatest: corporate, institutional, private residential land, commercial sectors across Dubai. Our company provides incredible solutions to property-related concerns. If you are looking to buy or rent property, our ideal property-related services will give you all the answers to your problems. Our up-to-date skills, marketing experience, and dedicated team make maximum efforts to let your property be known to all. We understand the value of connections between people and their properties. This propels us to go the extra mile and provide highly suitable places with sufficient security for our valued clients.
<br><br>
We help you reach more people with our ability to market property on local, regional, national, and international levels. Our listings are posted on many different commercial real estate websites that are visited by prospects and brokers from all over the world. Through the internet, your property is exposed to all regional, national, and international real estate brokers, as well as investment bankers. In addition, our marketing strategy exposes your property to prospects globally.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-company end -->

        <!-- mission and vision section -->
<section class="deals-section sec-pad">
    <div class="auto-container">
        <div class="deals-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block aboutvision">
                        <div class="deals-block-one">
                            <div class="inner-box">
                            <i class="bi bi-camera2"></i>
                                <h3>Our Vision</h3>
                               <p>Our Mission at Next Level Real Estate Dubai is to elevate your property experience, merging local expertise with global standards. We’re dedicated to transparent dealings, innovative solutions, and building enduring relationships, ensuring Dubai’s skyline is matched only by the heights of our service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block aboutvision">
                        <div class="image-box">
                            <figure class="image"><img class="deals-img"
                                    src="{{asset('web-assets/images/resource/vision.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block aboutvision">
                        <div class="deals-block-one">
                            <div class="inner-box">
                            <i class="bi bi-bookmarks-fill"></i>
                                <h3>Our Mission</h3>
                               <p>Our vision is to redefine Dubai’s real estate horizon, setting the benchmark for trust, innovation, and excellence. At Next Level Real Estate, we envision a future where every property transaction is seamless, ensuring our clients’ aspirations meet reality</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block aboutvision">
                        <div class="image-box">
                            <figure class="image"><img class="deals-img"
                                    src="{{asset('web-assets/images/resource/deals-2.jpg')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block aboutvision">
                        <div class="deals-block-one">
                            <div class="inner-box">
                            <i class="bi bi-chat-heart"></i>
                                <h3>Our Values</h3>
                               <p>Local Expertise, Global Outlook<br>
                               Client-Centric Approach<br>
                               Tailored Experience<br>
                               Market Leadership<br>
                               Enduring Relationships<br>
                               Sustainability Commitment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 deals-block aboutvision">
                        <div class="image-box">
                            <figure class="image"><img class="deals-img"
                                    src="{{asset('web-assets/images/resource/deals-1.webp')}}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

          <!-- mission and vision section End-->

               <!-- cta-section -->
        <section class="cta-section alternate-2 pb-240 centred" style="background-image: url({{asset('web-assets/images/background/about-image.jpg')}});">
            <div class="auto-container">
                <div class="inner-box clearfix">
                    <div class="text">
                        <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
                    </div>
                    <div class="btn-box">
                        <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                        <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- funfact-section -->
        <section class="funfact-section centred">
            <div class="auto-container">
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="1270">0</span>
                                    </div>
                                    <p>Total Professionals</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="2350">0</span>
                                    </div>
                                    <p>Total Property Sell</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="2540">0</span>
                                    </div>
                                    <p>Total Property Rent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="8270">0</span>
                                    </div>
                                    <p>Total Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->
        <!-- about-section -->
        <section class="about-section about-page sec-pad">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image_block_1">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('web-assets/images/resource/ahad-ceo.jpg')}}" alt=""></figure>
                                    <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <h2>20</h2>
                                        <h4>Years of <br/>Experience</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column ceomess">
                            <div class="content_block_3">
                                <div class="content-box">
                                    <div class="sec-title">
                                        <h5>CEO Message</h5>
                                        <h3>Abdul Ahad Siddiq</h3>
                                        <p><b>Managing Director</b></p>
                                    </div>
                                    <div class="text">
                                   <p> “We value our clients and therefore leave no stone unturned in providing them the right properties. Working with us, allows our clients to sit back and relax while we do all the work to make this process hassle free. People and their properties will always be cared from the heart of what our brand name stands for.”</p>
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
        </section>
        <!-- about-section end -->


        <!-- feature-style-three -->
        <section class="feature-style-three centred ">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Services</h5>
                    <h2>Property Services</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
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


   


        <!-- testimonial-style-four -->
        {{-- <section class="testimonial-style-four sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Testimonials</h5>
                    <h2>What They Say About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore magna aliqua enim.</p>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Rebeka Dawson</h5>
                            <span class="designation">Instructor</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Marc Kenneth</h5>
                            <span class="designation">Founder CEO</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Owen Lester</h5>
                            <span class="designation">Manager</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Rebeka Dawson</h5>
                            <span class="designation">Instructor</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Marc Kenneth</h5>
                            <span class="designation">Founder CEO</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Owen Lester</h5>
                            <span class="designation">Manager</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Rebeka Dawson</h5>
                            <span class="designation">Instructor</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Marc Kenneth</h5>
                            <span class="designation">Founder CEO</span>
                        </div>
                    </div>
                    <div class="testimonial-block-three">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-18"></i></div>
                            <h4>“Our goal each day is to ensure that our residents’ needs are not only met but exceeded.”</h4>
                            <h5>Owen Lester</h5>
                            <span class="designation">Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- testimonial-style-four end -->
         <!-- clients-section -->
        <section class="clients-section bg-color-1">
            <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/background/about-image2.jpg')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-7 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h2>Why Choose Use?</h2>
                            <p class="pt-3">The first step in selling your property is to get a valuation from local experts. They will inspect your home and take into account its unique features, the area and market conditions before providing you with the most accurate valuation.</p>
                            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nulla quae alias tempora. Placeat voluptatem eum numquam quas distinctio obcaecati quaerat, repudiandae qui! Quia, omnis, doloribus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod libero amet, laborum qui nullas tempora.</p>
                            <div class="btn-box pt-4"><a href="" class="theme-btn btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>

                
            </div>

        </section>
        <!-- clients-section end -->
        <!-- testimonial-style-two -->
        <section class="testimonial-style-two sec-pad mt-5 mb-5" style="background-image: url({{asset('web-assets/images/background/testimonial.jpg')}});">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 offset-xl-6 inner-column">
                        <div class="single-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{asset('web-assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                        <h4>Rebeka Dawson</h4>
                                        <span class="designation">Instructor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{asset('web-assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                        <h4>Owen Lester</h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-18"></i></div>
                                    <div class="text">
                                        <h3>“Our goal each day is to ensure that our res- idents’ needs are not only met but exceeded To make that happen we are committed to providing an environment.”</h3>
                                    </div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{asset('web-assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                        <h4>Marc Kenneth</h4>
                                        <span class="designation">Founder CEO</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


       

     

        <!-- faq-page-section -->
        <section class="faq-page-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
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
                </div>
            </div>
        </section>
        <!-- faq-page-section end -->
        
        <!-- team-section -->
        <section class="team-section sec-pad centred">
            <div class="auto-container">
                <div class="sec-title">
                    <h5>Our Agents</h5>
                    <h2>Meet Our Excellent Agents</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-1.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Jennifer Lawrence</a></h4>
                                        <span class="designation">Senior Agent</span>
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
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-2.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Benedict Cumberbatch</a></h4>
                                        <span class="designation">Senior Agent</span>
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
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-3.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Elizabeth Winstead</a></h4>
                                        <span class="designation">Senior Agent</span>
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
            <div class="btn-box pull-right responsive">
                <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->
        <!-- download-section 
        <section class="download-section bg-color-3">
            <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-3.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{asset('web-assets/images/resource/download-1.png')}}" alt=""></figure>
                            <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="{{asset('web-assets/images/resource/download-2.png')}}" alt=""></figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <span>Download</span>
                                <h2>Download Our Android and IOS App for Experience</h2>
                                <div class="download-btn">
                                    <a href="index.html" class="app-store">
                                        <i class="fab fa-apple"></i>
                                        <p>Download on</p>
                                        <h4>App Store</h4>
                                    </a>
                                    <a href="index.html" class="google-play">
                                        <i class="fab fa-google-play"></i>
                                        <p>Get It On</p>
                                        <h4>Google Play</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- download-section end -->

    
@endsection