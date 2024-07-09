@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title text-center">Edit a Project post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->


    <x-post-forms.form  action="{{ route('projects.update', ['id'=>$project->id]) }}" >
      @csrf
      @method('PATCH')
      
        

      <x-post-forms.title-input placeholder="Project title..." value="{{ $project->post_title }}" />
      
      <x-post-forms.desc-input placeholder="Project description" >
        {{ $project->post_intro }}
      </x-post-forms.desc-input>
  
      <x-post-forms.status />
       
      <x-post-forms.photo-input />

      <x-post-forms.content-input placeholder="The project in detail..." >
        {{ $project->post_content }}
      </x-post-forms.content-input>

      <x-post-forms.author-input :authors="$authors" />


</x-post-forms.form>
</div>

  {{-- <iframe src="https://daviesamedeus.substack.com/embed" width="480" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe> --}}
@endsection

  
