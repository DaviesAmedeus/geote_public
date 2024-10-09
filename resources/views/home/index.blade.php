<x-layout>
          <!-- Landing section -->
          <x-slot:landing_section>
            <x-landing-pages.landing-page :home="request()->is('/')" />
          </x-slot:landing_section>

           <!-- ======= About Section ======= -->
           <section id="about" class="about">
            <div class="container" data-aos="fade-up">
        
              <div class="row position-relative">
        
                <div class="col-lg-7 about-img" style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other1.jpg') }});"></div>
        
                <div class="col-lg-7">
                  <h2>Welcome to GeoTE.</h2>
                  <div class="our-story">
                    <h4>Est 2019</h4>
                    <h3>Our Story</h3>
                    <p>Founded in 2019 as a youth-led initiative promoting sustainable development
                      in local communities, GeoTE aims at utilizing geospatial technology to support
                      sustainable development goals through geographic citizen science and participatory
                      geographic information system strategies in implementing community projects to enhance
                      inclusiveness in addressing challenges and finding sustainable solutions in local
                      communities.</p>
        
                    <p>Being one of many open mapping communities, GeoTE Tanzania has continued to contribute
                      to open data through Openstreetmap and while transforming community knowledge through
                      remote mapping and field data gathering workshops and capacity building sessions.</p>
        
        
        <!--                <div class="watch-video d-flex align-items-center position-relative">-->
        <!--                  <i class="bi bi-play-circle"></i>-->
        <!--                  <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>-->
        <!--                </div>-->
                  </div>
                </div>
        
              </div>
        
            </div>
        
        
            <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
          <div class="container" data-aos="fade-up">
        
            <div class="row justify-content-around gy-4">
              <div class="col-lg-6 img-bg" style="background-image: url({{ asset('assets/img/landingpages_pics/other_pics/other5.jpg') }});" data-aos="zoom-in" data-aos-delay="100"></div>
        
              <div class="col-lg-5 d-flex flex-column justify-content-center">
        
                    <p>Our strength lies in our ability to mobilize community participation in developing
                      and implementing projects and activities that strengthen their adaptation to changing
                      environments and technologies. In addition, GeoTE effectively advocates the use of
                      open knowledge and problem-based learning through community training, seminars, and
                      workshops with different stakeholders.</p>
        
                    <p>GeoTE intends to create a community that works in a connected ecosystem,
                      contributing to and utilizing the power of open-source tools in solving local,
                      regional, and global challenges that directly support the 2030 Sustainable Development
                      Goals.</p>
        
        
        
              </div>
            </div>
        
          </div>
        </section><!-- End Alt Services Section -->
        
          </section>
        
        
        <!-- End About Section -->
         
        
        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">
        
              <div class="row gy-4">
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-tools  color-blue flex-shrink-0"></i>
                    <div>
                      <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Projects</p>
                    </div>
                  </div>
                </div><!-- End Stats Item -->
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-person color-orange flex-shrink-0"></i>
                    <div>
                      <span data-purecounter-start="0" data-purecounter-end="850" data-purecounter-duration="1" class="purecounter">+</span>
                      <p>Trainees</p>
                    </div>
                  </div>
                </div><!-- End Stats Item -->
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-clipboard-data color-green flex-shrink-0"></i>
                    <div>
                      <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Workshops</p>
                    </div>
                  </div>
                </div><!-- End Stats Item -->
        
                <div class="col-lg-3 col-md-6">
                  <div class="stats-item d-flex align-items-center w-100 h-100">
                    <i class="bi bi-journals color-pink flex-shrink-0"></i>
                    <div>
                      <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Publications</p>
                    </div>
                  </div>
                </div><!-- End Stats Item -->
        
              </div>
        
            </div>
          </section>
        <!-- End Stats Counter Section -->
        



</x-layout>

{{-- @extends('layouts.layout')

@include('partials.landingpages.home_landingpage')

@section('content')

  
@endsection --}}