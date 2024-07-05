@props(['blogposts', 'projects'])
<div class="col-lg-4">
<div class="sidebar">
    <!-- RECENT BLOG POSTS-->
    <div class="sidebar-item recent-posts">
      <h3 class="sidebar-title">RECENT BLOG POSTS</h3>
      <div class="mt-3">
        @if(@count($blogposts) > 0)
          @foreach($blogposts as $recentBlogPost)
          <div class="post-item mt-3">
            <img class="img-thumbnail" src="{{$recentBlogPost->post_picture ? asset($recentBlogPost->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="">
            <div>
              <h4><a href="{{ route('blog.show', ['id'=>$recentBlogPost->id]) }}">{{ Illuminate\Support\Str::words($recentBlogPost->post_title, 6, '...') }}</a></h4>
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
        @if(@count($projects) > 0)
          @foreach($projects as $recentProject)
          <div class="post-item mt-3">
            <img class="img-thumbnail" src="{{$recentProject->post_picture ? asset($recentProject->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" alt="">
            <div>
              <h4><a href="{{ route('projects.show', ['id'=>$recentProject->id]) }}">{{ Illuminate\Support\Str::words($recentProject->post_title, 6, '...') }}</a></h4>
              <time datetime="2020-01-01">{{ date('jS M Y', strtotime($recentProject->created_at)) }}</time>
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
<div class="col-lg-4">