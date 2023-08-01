@extends('webWrapper')
@section('content')

        <!-- banner-style-two -->
        <section class="banner-style-three">
            <div class="banner-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                <div class="slide-item">
                    <div class="pattern-box">
                        <div class="pattern-1"></div>
                        <div class="pattern-2" style="background-image: url({{asset('web-assets/images/shape/shape-8.png')}});"></div>
                        <div class="pattern-3" style="background-image: url({{asset('web-assets/images/shape/shape-6.png')}});"></div>
                        <div class="pattern-4" style="background-image: url({{asset('web-assets/images/shape/shape-7.png')}});"></div>
                    </div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="content-box">
                                <h2>PROPERTY MANAGEMENT EXPERTS IN DUBAI</h2>
                                <p>Want to rent a property in Dubai? Then, you are at the right place. We provide the most comprehensive and convenient property management services in Dubai.</p>
                                <div class="button-box">
                                    <a href="index-5.html" class="theme-btn btn-three banner-btn">Request A Property Appraisal</a>
                                </div>
                            </div>
                            <figure class="image-box"><img src="{{asset('web-assets/images/banner/bannerImage1.png')}}" alt=""></figure>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="pattern-box">
                        <div class="pattern-1"></div>
                        <div class="pattern-2" style="background-image: url({{asset('web-assets/images/shape/shape-8.png')}});"></div>
                        <div class="pattern-3" style="background-image: url({{asset('web-assets/images/shape/shape-6.png')}});"></div>
                        <div class="pattern-4" style="background-image: url({{asset('web-assets/images/shape/shape-7.png')}});"></div>
                    </div>
                    <div class="auto-container">
                        <div class="inner-box">
                            <div class="content-box">
                                <h2>PROPERTY MANAGEMENT EXPERTS IN DUBAI</h2>
                                <p>Want to rent a property in Dubai? Then, you are at the right place. We provide the most comprehensive and convenient property management services in Dubai.</p>
                                <div class="button-box">
                                    <a href="index-5.html" class="theme-btn btn-three banner-btn">Request A Property Appraisal</a>
                                </div>
                            </div>
                            <figure class="image-box"><img src="{{asset('web-assets/images/banner/banner-image2.png')}}" alt=""></figure>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->
        
        <section class="form-section">
            <div class="auto-container">
                <div class="row">
                <div class="col-8">
                    <div class="form-box">
                        <div class="sec-title">                      
                            <h2>About Us</h2>
                            <p class="pt-3">A market leader in a wide variety of real estate services, Next Level Real Estate has established a solid name for itself both locally and internationally. The Next-Level Real Estate property management team is aware of the worries that landlords have, so we have developed a range of 5-star customized services to handle every part of the property. We do this via a team of highly skilled professionals ready to provide hassle-free guidance and manage the property with ease.</p>
                            <p class="pt-3">A market leader in a wide variety of real estate services, Next Level Real Estate has established a solid name for itself both locally and internationally. The Next-Level Real Estate property management team is aware of the worries that landlords have, so we have developed a range of 5-star customized services to handle every part of the property. We do this via a team of highly skilled professionals ready to provide hassle-free guidance and manage the property with ease.</p>
                            <div class="btn-box pt-4">
                                <a href="" class="theme-btn btn-one about-btn">Read More &nbsp;&nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a></div>                         
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="property-sidebar management default-sidebar">
                        <div class="author-widget sidebar-widget">
                            <div class="author-box">
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
                            </div>
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
                </div>

                </div>
            </div>
        </section>

        <!-- category-section -->
        <section class="category-section centred">
            <div class="auto-container">
                <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <ul class="category-list clearfix">
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-1"></i></div>
                                    <h5><a href="property-details.html">Apartment</a></h5>
                                    <span>52</span>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-2"></i></div>
                                    <h5><a href="property-details.html">Villas</a></h5>
                                    <span>20</span>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="category-block-two">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="icon-3"></i></div>
                                    <h5><a href="property-details.html">Full Building</a></h5>
                                    <span>35</span>
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
                                    <h5><a href="property-details.html">Snagging</a></h5>
                                    <span>10</span>
                                    <div class="inqure-btn mt-5">
                                        <a href="" class="theme-btn btn-two">Inqure Now</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- category-section end -->

        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('web-assets/images/resource/about1.jpg')}}" alt=""></figure>
                                <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>20</h2>
                                    <h4>Years of <br />Experience</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h5>About</h5>
                                    <h3>BENEFITS OF HIRING A PROPERTY MANAGER</h3>
                                </div>
                                <div class="text">
                                    <p>By employing a property manager, you can avoid having to deal with late-night crises, evictions, collecting unpaid rent, damages, paperwork, finding contractors, and other tiresome and time-consuming activities.</p>
                                    <p>If you employ a property manager, you won’t have to be concerned about your tenants or the frequent inspections, so you may go wherever you choose. You are free to purchase additional real estate and reside wherever you like.</p>
                                    <p>Time is money for real estate investors, therefore you’d be better off doing other things than micromanaging a property. If you concentrate on asset management, you will be working to expand your company; if you manage the properties personally, you will be working on it. Not to mention the fact that you will have more free time to spend with your loved ones.</p>
                                </div>
                                {{-- <ul class="list clearfix">
                                    <li>consectetur elit sed do eius</li>
                                    <li>consectetur elit sed</li>
                                </ul> --}}
                                <div class="btn-box">
                                    <a href="contact.html" class="theme-btn btn-one">Contact With Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
        

        <section class="cta-section advantgaes alternate-2 centred mt-5" style="background-image: url({{asset('web-assets/images/resource/agency-sec-bg.jpg')}}); position: relative;  height: 300px;">
            <div class="overlay">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="text">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Chossen End-->
        <section class="choosen-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Why Landlord Chosse Next Level Real Estate</h2>
                </div>
                <div class="wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms" >
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="chosen-box">
                                <figure>
                                    <img src="{{asset('web-assets/images/icons/image-icon-1.jpg')}}" alt="">
                                </figure>
                                {{-- <i aria-hidden="true" class="fas fa-pen-nib"></i> --}}
                                <h6>Professionalism</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="chosen-box">
                                <figure>
                                    <img src="{{asset('web-assets/images/icons/image-icon-2.jpg')}}" alt="">
                                </figure>
                                {{-- <i aria-hidden="true" class="fas fa-handshake"></i> --}}
                                <h6>To Keep Properties In Safe Hands</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="chosen-box">
                                {{-- <i aria-hidden="true" class="fas fa-dollar-sign"></i> --}}
                                <figure>
                                    <img src="{{asset('web-assets/images/icons/image-icon-3.jpg')}}" alt="">
                                </figure>
                                <h6>To Put The Right Price Of The Property</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="chosen-box">
                                {{-- <i aria-hidden="true" class="far fa-eye"></i> --}}
                                <figure>
                                    <img src="{{asset('web-assets/images/icons/image-icon-4.jpg')}}" alt="">
                                </figure>
                                <h6>Tenant Screening</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="chosen-box">
                                {{-- <i aria-hidden="true" class="fas fa-file-invoice-dollar"></i> --}}
                                <figure>
                                    <img src="{{asset('web-assets/images/icons/image-icon-5.jpg')}}" alt="">
                                </figure>
                                <h6>Stress-Free Passive Income</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12">
                            <div class="chosen-box">
                                {{-- <i aria-hidden="true" class="fas fa-home"></i> --}}
                                <figure>
                                    <img src="{{asset('web-assets/images/icons/image-icon-6.jpg')}}" alt="">
                                </figure>
                                <h6>Tenant Retention</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>        
        <!-- Chossen End -->

        <!-- place-style-two -->
        <section class="place-style-two sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box service-box">
                                <div class="sec-title">
                                    <h2>Commercial Property Management Service</h2>
                                    <p>Our commercial property management service wants to take some of the owner’s responsibilities off their shoulders. We accomplish this by taking care of the majority of the daily chores.</p>
                                    <p>If you spend all of your time managing your tenants, you won’t have time to expand your investment portfolio. Your time is valuable. Employ Next Level Real Estate to handle the time-consuming daily tasks on your behalf. In this approach, you may utilise your time to hunt for new prospects, update your current portfolio, and take care of maintaining commercial real estate.</p>
                                </div>
                                {{-- <ul class="place-list clearfix">
                                    <li><a href="categories.html"><h5>Australia</h5><span>(02)</span></a></li>
                                    <li><a href="categories.html"><h5>Bangladesh</h5><span>(13)</span></a></li>
                                    <li><a href="categories.html"><h5>Belgium</h5><span>(05)</span></a></li>
                                    <li><a href="categories.html"><h5>Brazil</h5><span>(04)</span></a></li>
                                    <li><a href="categories.html"><h5>California</h5><span>(07)</span></a></li>
                                </ul> --}}
                                <div class="btn-box">
                                    <a href="" class="theme-btn btn-one">Inqure Now &nbsp;&nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block">
                            <div class="image-box">
                                <figure class="image image-1 paroller"><img src="{{asset('web-assets/images/resource/bImage.jpg')}}" alt=""></figure>
                                <figure class="image image-2 paroller-2"><img src="{{asset('web-assets/images/resource/bImage1.jpg')}}" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- place-style-two end -->
        
        <!--Property Content-->
        <section class="property-image-sec">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-image-box">
                            <figure>
                                <img src="{{asset('web-assets/images/resource/property-image-1.jpg')}}" alt="">
                            </figure>
                            <div class="property-title-card text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="text">
                                    <p>Property Management Packages &nbsp;&nbsp;<i aria-hidden="true" class="fas fa-arrow-right"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 property-content-box">
                        <div class="property-content-box">
                            <div class="text">
                                <p>Families, companies, and real estate investors—many of whom reside abroad—who want their assets maintained by experts are our clients.</p>
                                <p>Our objective is to increase the return on your real estate investment and to free you from any burden associated with the ongoing administration of your properties.</p>
                                <p>By increasing your ROI, offering risk assessment and legal protection, and taking care of the paperwork and upkeep of your properties, we are devoted and ready to provide the maximum profit for your investment possible. This is made possible by our significant investment management experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End-->

        <!--Our Services-->
        <section class="our-service sec-pad">
            <div class="auto-container">
                <div class="sec-title">
                    <h2>Our Service</h2>
                </div>
                <div class="single-item-carousel service owl-carousel owl-theme owl-dots-none nav-style-one owl-loaded owl-drag">
                        <div class="row clearfix">
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Assist In Property Handover And Snagging Process</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Evaluate Your Property’S Justified Current Market Rental</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Effectively Market Your Property For Rent</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Find And Screen Tenants</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Prepare Tenancy And Relevant Documentation</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Tenancy Agreement / Ejari Registration</h3>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Rent Collection</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Prepare Legal Documents Required By Law Under The Residential Tenancy Act By Rera</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Arrange Insurance For Your Property (As Per Your Requirement)</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Electrical Wiring</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Plumbing</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Window Treatments (Screening Off The Balcony)</h3>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Ceilings And Walls</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Stairs And Floors</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Final Inspection & End Of Tenancy Matters</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Lease Renewals And Rent Reviews</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Prepare Financial Statements</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Deliver Monthly Payment & Statement To You Including Copies Of Paid Invoices</h3>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Arrange Repairs & Maintenance Works</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Ensure With The Tenant Regarding Timely Payment Of Utility Bills</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Attend Tenant’S Complaint</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Routine Inspection & Reports</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Smoke Detectors, Sprinklers, And Fire Alarms</h3>
                                    </div>
                                 </div>
                            </div>
                            <div class="col-md-4 mt-5">
                                 <div class="service-cards">
                                    <div class="icon-box"><i class="fas fa-tools"></i></div>
                                    <div class="text">
                                        <h3>Legislation</h3>
                                    </div>
                                 </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!--Our Service End-->
        

        <!-- cta-section -->
        <section class="cta-section advantgaes alternate-2 centred " style="background-image: url({{asset('web-assets/images/background/footer-bg-1.jpg')}});">
            <div class="overlay">
                <div class="auto-container mt-5">
                    <div class="inner-box clearfix">
                        <div class="text">
                            <h2>ADVANTAGES</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->

        <!-- funfact-section -->
        <section class="advantage-section centred">
            <div class="auto-container">
                <div class="single-item-carousel  owl-carousel owl-theme owl-nav-none dots-style-one owl-loaded owl-drag inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="100" data-stop="10">10</span>
                                    </div>
                                    <p>40 Years Of Experience In Dubai Property Management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="200" data-stop="20">20</span>
                                    </div>
                                    <p>Help In Searching Reliable Tenants In Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="300" data-stop="30">30</span>
                                    </div>
                                    <p>Keep You Informed With Quarterly Or Time-Specific Reports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="400" data-stop="40">40</span>
                                    </div>
                                    <p>Bring Tenants On Your Property With Occupancy Rates Of 96% On Average.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="100" data-stop="10">10</span>
                                    </div>
                                    <p>40 Years Of Experience In Dubai Property Management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="200" data-stop="20">20</span>
                                    </div>
                                    <p>Help In Searching Reliable Tenants In Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="300" data-stop="30">30</span>
                                    </div>
                                    <p>Keep You Informed With Quarterly Or Time-Specific Reports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                            <div class="advantage-block-one">
                                <div class="inner-box">
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="400" data-stop="40">40</span>
                                    </div>
                                    <p>Bring Tenants On Your Property With Occupancy Rates Of 96% On Average.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->
        
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
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
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
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
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
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
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
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
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
                                        <div class="icon-outer"><i class="fas fa-plus"></i></div>
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
                    <h4>WANT TO TALK ABOUT DUBAI PROPERTY MANAGEMENT?</h4>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('web-assets/images/agents/agent-1.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h4><a href="agents-details.html">Abdul Ahad Siddiq</a></h4>
                                        <span class="designation">Managing Director</span>
                                        <div class="btn-box">
                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp management-btn"><i class="fab fa-whatsapp"></i></a>
                                        </div>
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
                                        <h4><a href="agents-details.html">Salwa Araoui</a></h4>
                                        <span class="designation">Sales Director</span>
                                        <div class="btn-box">
                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp management-btn"><i class="fab fa-whatsapp"></i></a>
                                        </div>
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
                                        <h4><a href="agents-details.html">Houssam Eddine Salmi</a></h4>
                                        <span class="designation">Client Manager</span>
                                        <div class="btn-box">
                                            <a href="/agentDetails" class="theme-btn btn-one btn-profile">View Profile</a>
                                            <a href="/agentDetails" class="theme-btn btn-two btn-whatsapp management-btn"><i class="fab fa-whatsapp"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->
    
@endsection