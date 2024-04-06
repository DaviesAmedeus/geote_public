@extends('layouts.layout')

@include('partials.landingpages.projects_landingpage')

  

@section('content')



   <!-- ======= Project Section ======= -->
   <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our projects align with Global SDG's</h2>
        <p>Empowering youth to become agents of change through engagement.</p>
      </div>

      <div class="row gy-4">
        @foreach ($projects as $project)
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <div class="row">
              <div class="col-xl-5">
                  <img  src="{{$project->post_picture ? asset('storage/' . $project->post_picture ) : asset('assets/img/blog/blog1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="col-xl-7 d-flex align-items-center">
                <div class="card-body">
                  <a href="{{ route('projects.show', ['id'=>$project->id]) }}"><h4 class="card-title">{{ $project->post_title }}</h4></a>
                  <p>{{ $project->post_intro }}...</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Card Item -->
        @endforeach

        

        <div class="mt-3 p-3">
          {{ $projects->links()  }}
        </div>

      </div>
      
    </div>
  </section><!-- End Project Section -->

@endsection