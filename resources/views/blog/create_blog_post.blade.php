@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title text-center">Create a Blog post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
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
            
              <div class="input-group">
                <div class="custom-file">
                  <label for="exampleInputFile">Cover photo(w:800, h:600)</label>
                  <input type="file" class="custom-file-input" name="post_picture" id="exampleInputFile">
                  @error('post_picture')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              </div>
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

              
              

         <div class="card">
                
                
          <div class="form-group p-3 d-flex">
            <div class="me-5" id="editor">
            <input type="text" name="author_name" value="{{ old('author_name') }}" class="form-control-plaintext" id="author_name" placeholder="Author name...">
            @error('author_name')
            <span class="text-danger">{{ $message }}</span>
            @enderror  
          </div>
            
          <div class="custom-file d-flex">
            
            <label class="me-2 text-mute" for="exampleInputFile">Author photo(w:400, h:400)</label>
            
            <input type="file" class="custom-file-input" name="author_photo" id="exampleInputFile">
            @error('author_photo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
          </div>
            
          </div>

          <div class="form-group p-3">
              <textarea class="form-control-plaintext" name="author_desc" placeholder="About the author..." id="post_intro" >{{ old('post_intro') }}</textarea>
              @error('author_desc')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>
              </div>
        

        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <div class="d-grid col-4 mx-auto ">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection

  
