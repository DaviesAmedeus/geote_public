@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title">Edit Blog post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('blog.update', $blogpost->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

      <div class="card-body">
        <div class="form-group p-3">
          {{-- <label for="exampleInputEmail1">Title</label> --}}
          <input type="text" name="post_title" value="{{ $blogpost->post_title }}" class="form-control-plaintext" id="post_title" placeholder="Write Post Title....">
          @error('post_title')
          <span class="text-danger">{{ $message }}</span>
          @enderror
          
        </div>
        

        <div class="form-group p-3">
          {{-- <label for="postDescription">Description</label> --}}
          {{-- <input type="text" class="form-control" id="postDescription" placeholder="Write the description of the post"> --}}
            <textarea class="form-control-plaintext" name="post_intro" id="post_intro" >{{ $blogpost->post_intro }}</textarea>
            @error('post_intro')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>

        <div class="form-group p-3">
            {{-- <label for="postDescription">Content</label> --}}
            {{-- <input type="text" class="form-control" id="postDescription" placeholder="Write the description of the post"> --}}
              <textarea class="form-control" name="post_content" id="content" cols="10">{{ $blogpost->post_content }}</textarea>
              @error('post_content')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

        <div class="form-group p-3">
          <label for="exampleInputFile">Cover photo(w:800, h:600)</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="post_picture" id="exampleInputFile">
              @error('post_picture')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>

  {{-- <iframe src="https://daviesamedeus.substack.com/embed" width="480" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe> --}}
@endsection

  
