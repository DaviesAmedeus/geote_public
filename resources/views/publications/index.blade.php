<x-layout>

   <!-- Landing section -->
   <x-slot:landing_section>
    <x-landing-pages.landing-page
      style="background-image: url('{{ asset('assets/img/landingpages_pics/publications.jpg') }}');">
      GeoTE publications
    </x-landing-pages.landing-page>
  </x-slot:landing_section>

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">



            @foreach ($publications as $publication )
                <x-publications.publication-item :publication="$publication"  />
            @endforeach


                <div class="mt-3 p-3">
                    {{ $publications->links()  }}
                </div>


        </div>

            <!-- SIDE BAR-->
          <x-sidebar />

      </div>

     </div>
</section>
</x-layout>
