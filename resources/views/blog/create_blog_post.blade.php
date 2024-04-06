@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title">Create a Blog post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="/blog_section/blogstore" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        

          <div class="form-group p-3">
            {{-- <label for="exampleInputEmail1">Title</label> --}}
            <div id="editor">
            <input type="text" name="post_title" placeholder="Enter title" value="{{ old('post_title') }}" class="form-control-plaintext" id="post_title" placeholder="Write Post Title....">
            </div>
            @error('post_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            
          </div>
          
  
          <div class="form-group p-3">
            {{-- <label for="postDescription">Description</label> --}}
            {{-- <input type="text" class="form-control" id="postDescription" placeholder="Write the description of the post"> --}}
              <textarea class="form-control-plaintext" name="post_intro" placeholder="Post description" id="post_intro" >{{ old('post_intro') }}</textarea>
              @error('post_intro')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
  
          <div class="form-group p-3">
              <label for="postDescription">Content</label>
              <div id="editor">
              <textarea class="form-control-plaintext" name="post_content" placeholder="The content of the post in detail..." id="content" cols="10">{{ old('post_content') }}</textarea>
              </div>  
              @error('post_content')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
  
          <div class="form-group p-3">
            <label for="exampleInputFile">Cover photo</label>
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection

  
