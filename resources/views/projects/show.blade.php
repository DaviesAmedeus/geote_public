<x-layout>
  <section id="blog" class="blog">



  <!-- Landing section -->
  <x-slot:landing_section>
    <x-landing-pages.landing-page
      style="background-image: url('{{ asset('assets/img/landingpages_pics/projectpage4.jpg') }}');">
      Project Details
    </x-landing-pages.landing-page>
  </x-slot:landing_section>

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img text-center">
              <img src="{{$project->image ? $project->image() : asset('assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid" width="800px" height="400px">
            </div>

            <h2 class="title">{{ $project->title }}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2024-02-02">{{ date('jS M Y', strtotime($project->created_at)) }}</time></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              {!! $project->body  !!}
            </div><!-- End post content -->

            {{-- Erick@9955 PASSWORD --}}

          </article><!-- End blog post -->
        </div>

          <!-- SIDE BAR-->
          <x-sidebar />


      </div>

    </div>
  </section><!-- End Blog Details Section -->

</x-layout>
