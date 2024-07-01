@extends('users.layouts.layout')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h4>Dashboard</h4>
  </div>
</div>

<div class="row g-3" >

  <div class="col-md-6 mb-6">
    <div class="card bg-primary text-white">
      <div class="card-body py-5">  Blog posts:{{ $blog_posts }}<strong class="p-3"> <a href="{{ route('user.allposts') }}" class="text-light text-decoration-none"> >></a> </strong></div>
    </div>
  </div>

  {{-- <div class="col-md-6 mb-6">
    <div class="card bg-warning text-dark">
      <div class="card-body py-5">News (Updates): {{ $updates }} <strong class="p-3"> <a href="{{ route('user.allUpdates') }}" class="text-light text-decoration-none"> >></a> </strong> </div>
    </div>
  </div> --}}

  <div class="col-md-6 mb-6">
    <div class="card bg-success text-white">
      <div class="card-body py-5">Projects: {{ $projects }} <strong class="p-3"> <a href="{{ route('user.allProjects') }}" class="text-light text-decoration-none"> >></a> </strong></div>
    </div>
  </div>

  <div class="col-md-6 mb-6">
    <div class="card bg-secondary  text-white">
      <div class="card-body py-5">All together: {{ $total_posts }} </div>
    </div>
  </div>
</div>
@endsection