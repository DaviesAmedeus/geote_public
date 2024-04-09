@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title">Create A Project Post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        

          <div class="form-group p-3">
            {{-- <label for="exampleInputEmail1">Title</label> --}}
            <div id="editor">
            <input type="text" name="post_title" placeholder="Project title..." value="{{ old('post_title') }}" class="form-control-plaintext" id="post_title" placeholder="Write Post Title....">
            </div>
            @error('post_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            
          </div>
          
  
            <div class="form-group p-3">
            {{-- <label for="postDescription">Description</label> --}}
            {{-- <input type="text" class="form-control" id="postDescription" placeholder="Write the description of the post"> --}}
              <textarea class="form-control-plaintext" name="post_intro" placeholder="Project description" id="post_intro" >{{ old('post_intro') }}</textarea>
              @error('post_intro')
              <span class="text-danger">{{ $message }}</span>
              @enderror
            </div>

            <label for="inputSelect" class="form-label">Default select</label>
            <select class="" aria-label="Default select" name="status" id="inputSelect">
              <option selected="">Select option</option>
              <option value="Completed">Completed</option>
              <option value="Inprogress">Inprogress</option>
              <option value="Pending">Pending</option>
            </select>
  
          <div class="form-group p-3">
              <label for="postDescription">Content</label>
              <div id="editor">
              <textarea class="form-control-plaintext" name="post_content" placeholder="The project in detail..." id="content" cols="10">{{ old('post_content') }}</textarea>
              </div>  
              @error('post_content')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
  
          <div class="form-group p-3">
            <label for="exampleInputFile">File input</label>
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

  
