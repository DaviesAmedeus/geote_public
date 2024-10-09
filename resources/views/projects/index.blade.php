<x-layout>
  <section id="blog" class="blog">



  <!-- Landing section -->
  <x-slot:landing_section>
    <x-landing-pages.landing-page
      style="background-image: url('{{ asset('assets/img/landingpages_pics/projectpage4.jpg') }}');">
      Our Projects
    </x-landing-pages.landing-page>
  </x-slot:landing_section>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-header">
        <h2>Our projects align with Global SDG's</h2>
        <p>Empowering youth to become agents of change through engagement.</p>
      </div>

      <div class="row gy-4 posts-list">

        @foreach ($projects as $project )
        <x-projects.project-item :project="$project"/>
        @endforeach


            <div class="mt-3 p-3">
                {{ $projects->links()  }}
            </div>

      </div><!-- End blog posts list -->


    </div>
  </section><!-- End Blog Section -->
</x-layout>








