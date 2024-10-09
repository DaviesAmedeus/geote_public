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
              <img src="{{$blog->image ? asset('storage/' . $blog->image ) : asset('assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{ $blog->title }}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>  <strong>By {{ $blog->author->name }}</strong></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2024-02-02">{{ date('jS M Y', strtotime($blog->created_at)) }}</time></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
               {!! $blog->body  !!}
            </div><!-- End post content -->


          </article><!-- End blog post -->

            @if($blog->author)
                <div class="post-author">
                    <h4 class="mb-3 text-muted">About the author</h4>
                    <div class=" d-flex align-items-center">
                        <img src="{{$blog->image ? $blog->image() : asset('assets/img/blog/blog1.jpg') }}" width="100px" height="100px" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                                              <h4>{{ $blog->author->name }}</h4>
                            <div class="social-links">
                                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                            </div>
                            <p>
                                                  {{$blog->author->bio}}
                            </p>
                        </div>
                    </div>
                </div><!-- End post author -->
            @endif

        </div>

            <!-- SIDE BAR-->
          <x-sidebar />

      </div>

     </div>
</section>
</x-layout>
