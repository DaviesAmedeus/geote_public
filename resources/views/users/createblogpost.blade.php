@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title">Create a Blog post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="">
        @csrf
      <div class="card-body">
        <div class="form-group p-3">
          <label for="exampleInputEmail1">Title</label>
          <input type="email" name="post_title" class="form-control" id="post_title" placeholder="Write Post Title....">
        </div>

        <div class="form-group p-3">
          <label for="postDescription">Description</label>
          {{-- <input type="text" class="form-control" id="postDescription" placeholder="Write the description of the post"> --}}
            <textarea class="form-control" name="post_intro" id="post_intro" ></textarea>
        </div>

        <div class="form-group p-3">
            <label for="postDescription">Content</label>
            {{-- <input type="text" class="form-control" id="postDescription" placeholder="Write the description of the post"> --}}
              <textarea class="form-control" name="post_content" id="post_content" ></textarea>
          </div>

        <div class="form-group p-3">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
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

  
