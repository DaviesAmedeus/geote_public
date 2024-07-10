<x-layout>

   <!-- Landing section -->
   <x-slot:landing_section>
    <x-landing-pages.landing-page 
      style="background-image: url('{{ asset('assets/img/landingpages_pics/blogpage.jpg') }}');">
      Blog Post
    </x-landing-pages.landing-page>
  </x-slot:landing_section>

<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img text-center">
              <img src="{{$blogpost->post_picture ? asset('storage/' . $blogpost->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{ $blogpost->post_title }}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>  <strong>{{ $blogpost->author_name ? $blogpost->author_name : $blogpost->user->name}}</strong></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2024-02-02">{{ date('jS M Y', strtotime($blogpost->created_at)) }}</time></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
               {!! $blogpost->post_content  !!}
            </div><!-- End post content -->


          </article><!-- End blog post -->

        <div class="post-author">
          <h4 class="mb-3 text-muted">About the author</h4>
                <div class=" d-flex align-items-center">
                  <img src="{{$blogpost->author_photo ? asset('storage/' . $blogpost->author_photo ) : asset('storage'. $blogpost->user->profile_pic) }}" class="rounded-circle flex-shrink-0" alt="">
                <div>
                  <h4>{{ $blogpost->author_name ? $blogpost->author_name : $blogpost->user->name }}</h4>
                  <div class="social-links">
                    {{-- <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="biu bi-instagram"><
                      /i></a> --}}
                  </div>
                  <p>
                  {{$blogpost->author_desc ? $blogpost->author_desc  : $blogpost->user->about}}
                  </p>
                </div>
                </div>
        </div><!-- End post author -->
        </div>

            <!-- SIDE BAR-->
          <x-posts-sidebar :blogposts="$blog_posts" :projects="$projects" />

      </div>

     </div>
</section>
</x-layout>