@extends('layouts.layout')

@include('partials.landingpages.blog_post_landingpage')


  

@section('content')
<!-- ======= Blog Details Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{$blogpost->post_picture ? asset('storage/' . $blogpost->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="" class="img-fluid">
            </div>

            <h2 class="title">{{ $blogpost->post_title }}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{ $blogpost->user->name }}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="2024-02-02">{{ date('jS M Y', strtotime($blogpost->created_at)) }}</time></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
               {!! $blogpost->post_content  !!}
            </div><!-- End post content -->


          </article><!-- End blog post -->

          <div class="post-author d-flex align-items-center">
            <img src="{{$blogpost->user->profile_pic ? asset('storage/' . $blogpost->user->profile_pic ) : asset('assets/img/blog/blog1.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
            <div>
              <h4>{{ $blogpost->user->name }}</h4>
              <div class="social-links">
                {{-- <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"><
                  /i></a> --}}
              </div>
              <p>
               {{ $blogpost->user->about}}
              </p>
            </div>
          </div><!-- End post author -->
        </div>

        <div class="col-lg-4">

          <!-- SIDE BAR-->
      <div class="sidebar">

        <!--RECENT NEWS-->
        <div class="sidebar-item recent-posts">
          <h3 class="sidebar-title">RECENT UPDATES</h3>
          <div class="mt-3">
            @if(@count($recentNewsUpdates) > 0)
              @foreach($recentNewsUpdates as $recentNewsUpdate)
              <div class="post-item mt-3">
                <img class="img-thumbnail" src="{{$recentNewsUpdate->post_picture ? asset('storage/' . $recentNewsUpdate->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="">
                <div>
                  <h4><a href="">{{ $recentNewsUpdate->post_title }}</a></h4>
                  <time datetime="2020-01-01">{{ date('jS M Y', strtotime($recentNewsUpdate->created_at)) }}</time>
                </div>
              </div><!-- End recent post item-->
              @endforeach
            @else
              <div class="mt-3">
                  <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                    <div>
                      <h4><a href="blog-details.html">No Recent Blog Posts Yet</a></h4>
                    </div>
                  </div><!-- End recent post item-->
              </div>
            @endif 
          </div>
        </div>
        <!-- End sidebar Ongoing projects posts-->

<br>
        <!-- RECENT BLOG POSTS-->
        <div class="sidebar-item recent-posts">
          <h3 class="sidebar-title">RECENT BLOG POSTS</h3>
          <div class="mt-3">
            @if(@count($recentBlogPosts) > 0)
              @foreach($recentBlogPosts as $recentBlogPost)
              <div class="post-item mt-3">
                <img class="img-thumbnail" src="{{$recentBlogPost->post_picture ? asset('storage/' . $recentBlogPost->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="">
                <div>
                  <h4><a href="">{{ $recentBlogPost->post_title }}</a></h4>
                  <time datetime="2020-01-01">{{ date('jS M Y', strtotime($recentBlogPost->created_at)) }}</time>
                </div>
              </div><!-- End recent post item-->
              @endforeach
            @else
              <div class="mt-3">
                  <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                    <div>
                      <h4><a href="blog-details.html">No Recent Blog Posts Yet</a></h4>
                    </div>
                  </div><!-- End recent post item-->
              </div>
            @endif 
          </div>
        </div>
        <!-- End sidebar recent posts-->
<br>
        <!-- ONGOING PROJECTS -->
        <div class="sidebar-item recent-posts">
          <h3 class="sidebar-title">ONGOING PROJECTS</h3>
          <div class="mt-3">
            @if(@count($recentBlogPosts) > 0)
              @foreach($recentBlogPosts as $recentBlogPost)
              <div class="post-item mt-3">
                <img class="img-thumbnail" src="{{$recentBlogPost->post_picture ? asset('storage/' . $recentBlogPost->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="">
                <div>
                  <h4><a href="">{{ $recentBlogPost->post_title }}</a></h4>
                  <time datetime="2020-01-01">{{ date('jS M Y', strtotime($recentBlogPost->created_at)) }}</time>
                </div>
              </div><!-- End recent post item-->
              @endforeach
            @else
              <div class="mt-3">
                  <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                    <div>
                      <h4><a href="blog-details.html">No Recent Blog Posts Yet</a></h4>
                    </div>
                  </div><!-- End recent post item-->
              </div>
            @endif 
          </div>
        </div>

        <!-- End sidebar Ongoing projects posts-->


        <!-- End sidebar tags-->

      </div><!-- End Blog Sidebar -->
    </div>

    </div>


      </div>

    </div>
  </section><!-- End Blog Details Section -->

@endsection