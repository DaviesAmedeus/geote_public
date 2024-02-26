@extends('users.layouts.layout')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h4>Dashboard</h4>
  </div>
</div>

<div class="row">

  <div class="col-md-6 mb-3">
    <div class="card bg-primary text-white h-100">
      <div class="card-body py-5">Blog Posts: </div>
      <div class="card-footer d-flex">
        View Details
        <span class="ms-auto">
          <i class="bi bi-chevron-right"></i>
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-6 mb-3">
    <div class="card bg-warning text-dark h-100">
      <div class="card-body py-5">News (Updates): </div>
      <div class="card-footer d-flex">
        View Details
        <span class="ms-auto">
          <i class="bi bi-chevron-right"></i>
        </span>
      </div>
    </div>
  </div>

  <div class="col-md-6 mb-3">
    <div class="card bg-success text-white h-100">
      <div class="card-body py-5">Projects: </div>
      <div class="card-footer d-flex">
        View Details
        <span class="ms-auto">
          <i class="bi bi-chevron-right"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="col-md-6 mb-3">
    <div class="card bg-secondary  text-white h-100">
      <div class="card-body py-5">All together: </div>
      {{-- <div class="card-footer d-flex">
        View Details
        <span class="ms-auto">
          <i class="bi bi-chevron-right"></i>
        </span>
      </div> --}}
    </div>
  </div>
</div>
@endsection