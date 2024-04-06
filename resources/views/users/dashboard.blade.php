@extends('users.layouts.layout')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h4>Dashboard</h4>
  </div>
</div>

<div class="row" >

  <div class="col-md-3 mb-3">
    <div class="card bg-primary text-white">
      <div class="card-body py-5">  Blog posts:<strong class="p-3">{{ $total_posts }} </strong></div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <div class="card bg-warning text-dark">
      <div class="card-body py-5">News (Updates): </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <div class="card bg-success text-white">
      <div class="card-body py-5">Projects: </div>
    </div>
  </div>

  <div class="col-md-3 mb-3">
    <div class="card bg-secondary  text-white">
      <div class="card-body py-5">All together: </div>
    </div>
  </div>
</div>
@endsection