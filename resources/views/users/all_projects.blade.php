@extends('users.layouts.layout')
@section('content')
<div class="row">
  <div class="col-md-12">
    <h4>Project posts you've created.</h4>
  </div>
</div>

<div class="row">

  {{-- <div class="col-md-6 mb-3">
    <div class="card bg-primary text-white h-100">
      <div class="card-body py-5">Blog Posts: {{ $total }}</div>
    </div>
  </div> --}}

  


 

  <div class="container">
    @if (@count($posts)>0)

   
    <div class="table-responsive">
        <table class="table table-sm  table-striped">
          <thead>
            <tr class="table-primary">
              <th scope="col">Blog Title</th>
              <th scope="col">Date posted</th>
              <th scope="col"></th>
              <th scope="col"></th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            
            <tr>
              <td><a class="text-success text-decoration-none" href="{{ route('blog.show', ['id'=>$post->id]) }}">{{ $post->post_title }}</a></td>
              <td>{{ date('jS M Y', strtotime($post->created_at)) }}</td>
              <td><a href="{{ route('projects.edit', ['id'=>$post->id]) }}" class="btn btn-sm btn-primary">Edit</a></td>
              <td>

                <form method="POST" action="{{ route('projects.delete', ['id'=>$post->id]) }}">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr> 
            
            @endforeach
          </tbody>
        </table>
        <div class="mt-3 p-3">
            {{ $posts->links()  }}
          </div>
      
        </div> 
    
    
    @else
        <h1>Nothing here</h1>
    @endif
    
    
  </div>
</div>
@endsection