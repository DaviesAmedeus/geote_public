@extends('users.layouts.layout')
@section('content')

<div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title text-center">Create A Project Post</h3>
    </div>
   
    <x-post-forms.form method="POST" action="{{ route('projects.store') }}" >
      @csrf
      
        

          <x-post-forms.title-input placeholder="Project title..." value="{{ old('post_title') }}" />
          
          <x-post-forms.desc-input placeholder="Project description" >
            {{ old('post_intro') }}
          </x-post-forms.desc-input>
      
          <x-post-forms.status />
           
          <x-post-forms.photo-input />
  
          <x-post-forms.content-input placeholder="The project in detail..." >
            {{ old('post_content') }}
          </x-post-forms.content-input>

          <x-post-forms.author-input :authors="$authors" />


    </x-post-forms.form>
</div>
@endsection

  
