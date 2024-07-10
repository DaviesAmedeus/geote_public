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
              {{-- asset('storage/' . $project->post_picture ) --}}
              <img src="{{$project->post_picture ? asset($project->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid" width="800px">
            </div>

            <h2 class="title">{{ $project->post_title }}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>{{ $project->author->author_name }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2024-02-02">{{ date('jS M Y', strtotime($project->created_at)) }}</time></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              {!! $project->post_content  !!}
            </div><!-- End post content -->

            {{-- Erick@9955 PASSWORD --}}

          </article><!-- End blog post -->

          <div class="post-author d-flex align-items-center">
            <img src="{{$project->author->author_profile_pic ? asset($project->author->author_profile_pic ) : asset('assets/img/blog/blog1.jpg') }}" height="100px" width="100px" class="rounded-circle flex-shrink-0" alt="">
            <div>
              <h4>{{ $project->author->author_name }}</h4>
              <div class="social-links">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="biu bi-instagram"></i></a>
              </div>
              <p>
              {{ $project->author->author_bio}}
              </p>
            </div>
          </div><!-- End post author -->
        </div>

        

          <!-- SIDE BAR-->
          <x-posts-sidebar :blogposts="$blog_posts" :projects="$projects" />
       


      </div>

    </div>
  </section><!-- End Blog Details Section -->

</x-layout>