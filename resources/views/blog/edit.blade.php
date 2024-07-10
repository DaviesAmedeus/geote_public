@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title text-center">Edit Blog post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    
    <x-post-forms.form method="POST" action="{{ route('blog.update', ['id'=>$blog->id]) }}" >
      @csrf
      @method('PATCH')
      
        

      <x-post-forms.title-input placeholder="Blog title..." value="{{ $blog->post_title }}" />
      
      <x-post-forms.desc-input placeholder="Blog description" >
        {{ $blog->post_intro }}
      </x-post-forms.desc-input>
  
       
      <x-post-forms.photo-input />

      <x-post-forms.content-input placeholder="The Blog in detail..." >
        {{ $blog->post_content }}
      </x-post-forms.content-input>

      <x-post-forms.author-input :authors="$authors" />


</x-post-forms.form>
  </div>

  {{-- <iframe src="https://daviesamedeus.substack.com/embed" width="480" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe> --}}
@endsection

  
