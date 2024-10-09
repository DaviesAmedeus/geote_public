<x-layout>

  <!-- Landing section -->
  <x-slot:landing_section>
    <x-landing-pages.landing-page :home="request()->is('login')" 
      style="background-image: url({{asset('assets/img/landingpages_pics/engagementpage.jpg')}});">
      Our Engagements
    </x-landing-pages.landing-page>
  </x-slot:landing_section>

<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-mountain-city"></i>
            </div>
            <h3>Training and capacity building</h3>
            <p>Accelerating the impact of the data collected on community field and remote
              mapping, GeoTE trains data users and consumers on the correct and right way to
              use and create more impact with the data made available for decision making,
              knowledge generation, and communications.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-arrow-up-from-ground-water"></i>
            </div>
            <h3>Community sensitization</h3>
            <p>Working with a range of stakeholders, GeoTE successfully develops and improves
              awareness among its stakeholders in matters that contribute to the growth of the
              community in terms of professions, strategies, and prosperity.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting"></i>
            </div>
            <h3>Community Mapping</h3>
            <p>GeoTE works more closely with the community in gathering community data useful
              for decision-making and knowledge generation. We support communities by training
              and engaging community data collection through participatory community mapping.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-trowel-bricks"></i>
            </div>
            <h3>Mentorship</h3>
            <p>Targeting Youth, this thematic area focuses on mentoring youth in universities and the community on ways they can shape their carriers. This includes finding opportunities and ideating and pitching their ideas that aim to solve community challenges. </p>
          </div>
        </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-search"></i>
            </div>
            <h3>Research</h3>
            <p>GeoTE contributes to community-based research to remove the various social, cultural, and logistical barriers while aiming to achieve greater knowledge around sustainable environment to empower communities worldwide through collaboration and partnerships. </p>
          </div>
        </div><!-- End Service Item -->


      </div>

    </div>
  </section>
</x-layout>