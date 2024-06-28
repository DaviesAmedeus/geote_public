<x-layout>

  <!-- Landing section -->
  <x-slot:landing_section>
    <x-landing-pages.landing-page 
      style="background-image: url('{{ asset('assets/img/landingpages_pics/blogpage.jpg') }}');">
      Our Blog Posts
    </x-landing-pages.landing-page>
  </x-slot:landing_section>
  

  <section id="blog" class="blog">
    
    <x-flash-message />
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      @if (Auth::check())
      <a href="{{ route('blog.create') }}" class="btn btn-sm btn-primary m-3">Create Post</a>
      @endif
      
      <div class="row gy-4 posts-list">

        @foreach ($posts as $post )
        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100">

            <div class="post-img position-relative overflow-hidden">
              <img src="{{$post->post_picture ? asset('storage/' . $post->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" class="img-fluid" alt="">
              <span class="post-date">{{ date('jS M Y', strtotime($post->created_at)) }}</span>
            </div>

            <div class="post-content d-flex flex-column">

              <h3 class="post-title">{{ $post->post_title }}</h3>

              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">Written by {{ $post->author_name ? $post->author_name : $post->user->name}}</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Blog</span>
                </div>
              </div>

              <p>{{ $post->post_intro }}...</p>

              <hr>

              <a href="{{ route('blog.show', ['id'=>$post->id]) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                
            </div>

          </div>
         
        </div><!-- End post list item -->
        @endforeach
        

        <div class="mt-3 p-3">
          {{ $posts->links()  }}
        </div>

      </div><!-- End blog posts list -->


    </div>
</section><!-- End Blog Section -->
</x-layout>




