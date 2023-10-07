@extends('webWrapper')
@section('content')
<!--Page Title-->
<section class="page-title areas centred" style="background-image: url({{asset('web-assets/images/background/areas-bg.jpg')}});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>All areas in Dubai</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="/">Home</a></li>
                <li>All areas in Dubai</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 mb-5 offset-3 mt-5">
            <div class="blog-sidebar">
                <div class="sidebar-widget search-widget">
                    <div class="widget-title">
                        <h4 class="text-left">Search</h4>
                    </div>
                    <div class="search-inner">
                        <form action="blog-1.html" method="post">
                            <div class="form-group">
                                <input type="search" name="search_field" placeholder="Search" required="">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Page Title-->
<!-- sidebar-page-container -->
<section class="sidebar-page-container blog-grid p-5">
    <div class="auto-container">
        
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/jumeirah-village-circle-scaled.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Jumeirah Village Circle</a></h4>
                                        <div class="text">
                                            <p>Price from 400,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/dubailand.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Dubailand</a></h4>
                                        <div class="text">
                                            <p>Price from 322,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/business-bay_-scaled.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Business Bay</a></h4>
                                        <div class="text">
                                            <p>Price from 410,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/dubai-silicon-oasis.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Dubai Silicon Oasis</a></h4>
                                        <div class="text">
                                            <p>Price from 395,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/dubai-marina.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Dubai Marina</a></h4>
                                        <div class="text">
                                            <p>Price from  600,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/akoya-oxygen.jpeg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">AKOYA Oxygen</a></h4>
                                        <div class="text">
                                            <p>Price from 1,000,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/barsha-heights.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Barsha Heights</a></h4>
                                        <div class="text">
                                            <p>Price from 500,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/dubai-sports-city-scaled.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Dubai Sports City</a></h4>
                                        <div class="text">
                                            <p>Price from 285,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/dubai-international-city.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">International City</a></h4>
                                        <div class="text">
                                            <p>Price from 180,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/downtown-header.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Downtown Dubai</a></h4>
                                        <div class="text">
                                            <p>Price from 428,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/al-barsha.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Al Barsha</a></h4>
                                        <div class="text">
                                            <p>Price from 330,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/damac-hills-0.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">DAMAC Hills</a></h4>
                                        <div class="text">
                                            <p>Price from 340,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/jumeirah-lake-towers-1.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Jumeirah Lake Towers</a></h4>
                                        <div class="text">
                                            <p>Price from 590,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/sheikh-zayed-road-scaled.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Sheikh Zayed Road</a></h4>
                                        <div class="text">
                                            <p>Price from 706,777 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box areas">
                                    <div class="image-box">
                                        <figure class="image"><a href="blog-details.html"><img src="{{asset('web-assets/images/areas/palm-jumeirah.jpg')}}" alt=""></a></figure>
                                    </div>
                                    <div class="lower-content areas">
                                        <h4><a href="/areaDetails">Palm Jumeirah</a></h4>
                                        <div class="text">
                                            <p>Price from 1,000,000 AED</p>
                                            <p class="text-right"><a href="">Open Area Guide</a></p>
                                        </div>
                                        <div class="btn-box">
                                            <a href="blog-details.html" class="theme-btn btn-two">Buy Property</a>
                                            <a href="blog-details.html" class="theme-btn btn-one">Rent Property</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-wrapper areas">
                        <ul class="pagination clearfix">
                            <li><a href="blog-1.html" class="current">1</a></li>
                            <li><a href="blog-1.html">2</a></li>
                            <li><a href="blog-1.html">3</a></li>
                            <li><a href="blog-1.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="area-content">
                        <div class="text">
                            <p>Our Metropolitan Premium Properties team invites you to explore real estate options in Dubai’s leading freehold areas. The communities below include not only private villas, apartments and townhouse developments, but also numerous entertainment options, as well as cultural and tourist attractions.</p>
                            <p>Our company cooperates with leading developers in the UAE, which makes it possible to provide our clients with the best offers for renting and buying properties.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Features to Consider</h3>
                            </div>
                            <p>When buying real estate in Dubai, you must clearly understand the purpose of acquiring this type of asset. In the case of buying a home for permanent residence, the potential owner should focus on areas that match their budget and personal preferences.</p>
                            <p>When purchasing properties for commercial purposes, it is worth considering areas that generate a high ROI, such as International City (8.24%), Dubai Studio City (7.61%) or Bluewaters Island (7.1%). However, indicators of rental yields alone are not enough to make an informed decision.</p>
                            <p>If you’re at a loss at trying to make a choice, Metropolitan real estate agents are ready to provide you with all the information you need, as our experts regularly conduct in-depth research on the Dubai real estate market with a schedule and forecasts of possible changes in price levels, as well as supply and demand. Having this information will give you a deeper understanding of the Dubai housing market and will allow you to become aware of properties that are the most popular. One of our key goals as a business is to compile an investment portfolio with optimal passive income.</p>
                            <p>To be able to buy a home in Dubai, you cannot do without the involvement of a qualified intermediary. According to the requirements of local legislation, foreign investors have the right to choose and view properties, as well as to negotiate with sellers on their own. But in accordance with the requirements of the Dubai Land Department, further documentary registration of the transaction and the transfer of ownership must be carried out with the assistance of a lawyer or a real estate agency.</p>
                            <p>Our company offers a wide range of consulting services, including planning, market research of the real estate market and property valuations. Our staff will help you find the best property options for you, taking into account your budget, preferences and goals (investment or personal residence). Our company specialists are ready to offer you full support at all stages of a purchase, from the selection of a property and preparation of paperwork to the transfer of ownership, as well as providing investment property management services.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Features of Dubai Areas</h3>
                            </div>
                            <p>It is important for investors who wish to buy real estate in Dubai to know one more thing – not all projects can be purchased by foreigners. Foreign citizens have the right to buy or rent residences long term in freehold and leasehold areas.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Freehold and Leasehold Areas</h3>
                            </div>
                            <p>According to the UN, as of 2020, 88% of the population of the United Arab Emirates account for foreign citizens. For this reason, the country is well adapted to accommodate expats of all different nationalities. Foreigners who have received the status of a UAE resident can largely count on the same rights and freedoms as local residents.</p>
                            <p>According to Article 4 of Law No. 7 of 2006, foreigners who are not citizens of a GCC country have the right to purchase, lease or rent out land/real estate only in specially designated freehold zones. The properties purchased in these zones can be used as a permanent residence, resold to third parties, donated or inherited. Currently, there are 23 freehold districts in Dubai, such as Jumeirah Lake Towers, Dubai Marina and Arabian Ranches, among many others.</p>
                            <p>There are also leasehold areas in the Emirate. Real estate and land in these zones are not for sale, but they can be rented for a period of 10 to 99 years for the purpose of independent living or subleased to third parties. You cannot sell, donate or inherit this type of unit. A complete list of leasehold and freehold districts is established in Regulations No. 2 of 2006 (as amended).</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Areas for Living and Investment</h3>
                            </div>
                            <p>The purchase of Dubai residential property by foreigners is designated for:</p>
                            <p>* Permanent residence in the Emirate</p>
                            <p>* Generating passive rental income</p>
                            <p>The choice of a suitable area and a type of property depends on the purpose of its acquisition. The range of residences in Dubai is very extensive, since it includes ready-made, off-plan real estate, as well as properties in the secondary market, from affordable apartments to luxury townhouses and premium villas. Specialists from Metropolitan Premium Properties will help you to not only decide on the purpose of the purchase, but also select the best property options that meet your requirements and budget.</p>
                            <p>Real estate for a permanent residence is selected based on the convenience, budget and personal preferences of the owner, and not on the basis of market indicators. On the other hand, investment properties are acquired for the purpose of making a profit. To do this, the investor needs to pick a property with an appropriate price, quality and location. Real estate agents, translators and lawyers of Metropolitan Premium Properties will assist with this task quickly and efficiently.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Industrial Zones</h3>
                            </div>
                            <p>Part of the Emirate’s territory is designated for large industrial zones. Foreign companies and private individuals can invest in production facilities, ports, warehouses and logistics facilities. Labor accommodation is also in high demand among investors.</p>
                            <p>The government of Dubai is promoting the growth of the country’s industrial potential by offering various initiatives to enterprises and investors involved in this industry, including the exemption from customs duties on the import of raw materials and equipment, as well as tax incentives, just to name a few.</p>
                            <p>Currently, there are 7 industrial zones in Dubai: Ras Al Khor Industrial Area, Al Quoz Industrial Area, Al Safa, Al Khubaisi, Umm Ramool, Al Qusais and Jebel Ali.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Commercial Real Estate</h3>
                            </div>
                            <p>Commercial real estate is another promising niche for foreign investors. As with residential properties, expats have the right to purchase or rent commercial properties in designated areas like DIFC and Jebel Ali, for example.</p>
                            <p>The commercial real estate industry in Dubai is very extensive, covering the rental and sale of office space, co-working spaces, retail units, warehouses, showrooms, shopping malls and industrial facilities. Often, individual premises or entire floors of residential buildings are available for commercial purposes. Our experts are ready to help you understand all the nuances of commercial properties in Dubai and how to acquire them.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>Best Areas for Living</h3>
                            </div>
                            <p>Almost any property can be found in Dubai, from modest budget studios to penthouses, villas or premium apartments.</p>
                            <p>Areas with affordable properties include:</p>
                            <p>International City. There are mainly studios and 1-3 bedroom apartments available for sale here. The average annual rent for a 1-bedroom apartment is AED 30,000 (USD 8,200). Buying this type of property will cost you a minimum of AED 215,000 (USD 60,000).
                            </p>
                            <p>Dubai Silicon Oasis. There are plenty of both residential and commercial properties here. The average annual rental price for a 1-bedroom apartment is AED 32,000 (USD 9,000), while the starting selling price is AED 249,000 (USD 79,000).</p>
                            <p>Dubai Sports City. The annual rental cost of a 1-bedroom apartment in this area starts from AED 32,000 (USD 9,000). To purchase, units are priced at a minimum of AED 260,000 (USD 71,000).</p>
                            <p>Budget-friendly and premium areas differ, not only in the class of real estate. Infrastructure plays an essential role here; the availability of public transport routes, access to key highways of the emirate, sufficient parking spaces, as well as the proximity to different developments from education facilities to tourist and cultural attractions. Therefore, it is not the real estate itself that comes to the forefront, but the lifestyle that each specific community can offer – the availability of swimming pools, play areas, shopping facilities, spas, fitness centers, entertainment spots and educational institutions, among other necessary amenities.</p>
                            <p>Coastal areas are the best choice for long term investments. In the past few years, high development potential has been witnessed in areas such as Business Bay and Dubai Creek. Another promising development is Emaar Beachfront, the newest addition of one of the largest developers in the Emirates, Emaar Properties. Dubai Creek Harbour also deserves a special mention, as it is set to become a huge residential area with many attractions, including the entire Dubai Square shopping district and the upcoming tallest tower in the world, Dubai Creek Tower. Buyers searching for more affordable options should consider completed or off-plan projects by trusted developers such as Emaar, Nakheel, Meraas or Select Group.</p>
                            <p>Among other areas offering luxury real estate are:</p>
                            <p>Dubai Creek Harbour. The developers plan to build 6 residential towers with premium apartments overlooking the harbour and the bustling boulevard. Purchase prices of a 1-bedroom apartment will cost from AED 900,000 (USD 245,000).</p>
                            <p>Dubai Marina. There are more than 200 residential towers with 1-4 bedroom apartments and 5-bedroom penthouses, as well as a limited collection of villas located here. The annual rental price of 1-bedroom apartments in Dubai Marina starts at AED 66,000 (USD 18,000) while villas cost from AED 144,000 (USD 40,000). The average purchase price of a 1-bedroom apartment in Dubai Marina starts from AED 1,000,000 (USD 272,000) and a 2-bedroom villa – from AED 4,700,000 (USD 1,300,000).</p>
                            <p>Bluewaters Island. This area offers 10 mid-rise towers with premium apartments, penthouses and an exclusive collection of townhouses. The starting rental price for 1-bedroom apartments is AED 134,000 (USD 37,000) per annum, while the cost for purchasing these types of properties are priced at a minimum of AED 2,300,000 (USD 630,000).</p>
                            <p>Specialists in our company will help you choose the best property in the most suitable area for you. Our qualified agents are ready to take on all procedural and documentary issues regarding the purchase or rental of a property of any class and purpose.</p>
                        </div>
                        <div class="text">
                            <div class="sec-title-2 pt-5">
                                <h3>New Areas of Dubai</h3>
                            </div>
                            <p>District 2020 leads the list of new districts in Dubai. This project was launched in preparation for the international exhibition of Expo 2020, which is taking place from 1 October 2021 to 31 March 2022.</p>
                            <p>District 2020 is set to become a major innovation district in the Emirate. Now it is home to 136 exhibition pavilions and other buildings, including the exhibition center. The technologically advanced development is built as a large glass dome with incredible interactive panels on the façade. Upon completion of Expo, District 2020 will be redesigned as an independent area and will become a new free trade zone. According to the master plan, the development will be able to accommodate up to 90,000 people.</p>
                            <p>In terms of Dubai’s new Urban Master Plan 2040, the Emirate has decided to upgrade 3 existing urban centers and create 2 new hubs. The existing areas are as follows:</p>
                            <p>Deira and Bur Dubai will become a major historical and cultural center of the Emirate.</p>
                            <p>The functions of the business and financial center will be assigned to Downtown Dubai and Business Bay.</p>
                            <p>Dubai Marina and JBR will serve as an international leisure and tourism hub.</p>
                            <p>The 2 remaining centers are District 2020, a focal point for the exhibition, tourism and logistics sectors, and Dubai Silicon</p>
                            <p>Oasis Center, which is to become a hub for knowledge and innovation.</p>
                            <p>Over the past year, the Dubai property market has seen a trend towards limited launches of new projects. The majority of developers focused their efforts on commissioning existing real estate. Meanwhile, large companies such as Emaar, Meraas and DAMAC continued releasing new developments.</p>
                            <p>Emaar has been developing its coastal Emaar Beachfront project, while Meraas has continued to work on its iconic properties, including Bvlgari Island, Madinat Jumeirah and La Mer. Similar to Emaar, the real estate giant DAMAC Properties has expanded the development of its eponymous DAMAC Hills area.</p>
                        </div>
                    </div> --}}
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
<!-- search-field-section -->
<section class="search-field-section area-listsearch">
    <div class="auto-container">
        <div class="inner-container area-search">
            <h2>Best Properties for Sale in Dubai</h2>
            <div class="line"></div>
            <div class="search-field ">
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
<section class="feature-section area-properties ">
    <div class="auto-container area-container">
        <div class="sec-title">
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
<!-- feature-section end -->
<!--Blogs-->
<section class="blog-section sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Your one-stop Resource Guide!</h2>
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
<!--End Blogs-->
<!-- popular videos -->
<section class="videos-popular">
    <div class="container">
    <div class="sec-title">
            <h2>Popular Videos</h2>
            <div class="line mt-3"></div>
        </div>
        <div class="row">
       <div class="col-lg-6 col-md-12 col-sm-12">
    <iframe width="554" height="310" src="https://www.youtube.com/embed/pL08bOm-KgE" title="Overview of DAMAC Lagoons in Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div class="video-overi">
    <h4>Damac Lagoons</h4>
    <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                    class="fas fa-arrow-right"></i></a>
            </div>
        </div>
<div class="col-lg-6 col-md-12 col-sm-12">
        <iframe width="554" height="310" src="https://www.youtube.com/embed/J0Pe-V-gFAI" title="Madinat Jumeirah Living Apartments for Sale: New Phase Coming Soon 🇦🇪" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div class="video-overi">
    <h4>Damac Lagoons</h4>
    <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                    class="fas fa-arrow-right"></i></a>
            </div>
        </div>
<div class="col-lg-6 col-md-12 col-sm-12 pt-5">
        <iframe width="554" height="310" src="https://www.youtube.com/embed/g6FeCW0GXng" title="Overview of Green Acres Villas in DAMAC Hills, Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div class="video-overi">
    <h4>Damac Lagoons</h4>
    <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                    class="fas fa-arrow-right"></i></a>
            </div>
        </div>
<div class="col-lg-6 col-md-12 col-sm-12 pt-5">
    <iframe width="554" height="310" src="https://www.youtube.com/embed/pL08bOm-KgE" title="Overview of DAMAC Lagoons in Dubai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
<div class="video-overi">
    <h4>Damac Lagoons</h4>
    <a href="" class="theme-btn btn-one">Video Overview &nbsp; &nbsp;<i aria-hidden="true"
                    class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        
    </div>
 </div>
</section>
<!-- popular videos End -->
<!-- team-section -->
<!-- <section class="team-section  centred area-team ">
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
</section> -->
<!-- team-section end -->
<!-- areas-section start -->
<!-- <section class="place-section areas-details area-listing">
    {{-- <div class="auto-container"> --}}
    <div class="sec-title centred">
        <h5>Top Areas</h5>
        <h2>Most Popular Area</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod tempor incididunt <br />labore dolore
            magna aliqua enim.</p>
    </div>
    <div class="row areas-parent">
        <div class="col-6">
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
</section> -->
<!-- areas-section end -->
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
<!-- <section class="trending-section area-trending ">
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
</section> -->
<!-- trending-section end -->

<!-- sidebar-page-container -->

<!-- subscribe-section -->
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer" style="background-image: url({{asset('web-assets/images/shape/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-12 text-column">
                <div class="text">
                    <span>Subscribe</span>
                    <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 form-column">
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