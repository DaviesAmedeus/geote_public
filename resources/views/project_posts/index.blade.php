@extends('layouts.layout')

@include('partials.landingpages.projects_landingpage')

  

@section('content')

<section id="blog" class="blog">


  
  
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="section-header">
      <h2>Our projects align with Global SDG's</h2>
      <p>Empowering youth to become agents of change through engagement.</p>
    </div>

    <div class="row gy-4 posts-list">

      @foreach ($projects as $project )
      <div class="col-xl-4 col-md-6">
        <div class="post-item position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="{{$project->post_picture ? asset('storage/' . $project->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" class="img-fluid img-thumbnail" alt="">
            <span class="post-date">{{ $project->status }}</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">{{ $project->post_title }}</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">{{ $project->user->name }}</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Blog</span>
              </div>
            </div>

            <p>{{ $project->post_intro }}</p>

            <hr>

            <a href="{{ route('updates.show', ['id'=>$project->id]) }}" class="readmore stretched-link"><span>Project in detail</span><i class="bi bi-arrow-right"></i></a>
              
          </div>

        </div>
      </div><!-- End post list item -->
      @endforeach
      

      <div class="mt-3 p-3">
        {{ $projects->links()  }}
      </div>

    </div><!-- End blog posts list -->


  </div>
</section><!-- End Blog Section -->
@endsection







