<x-dashboard.layout>
  <div class="card card-primary m-5">
    <div class="card-header">
      <h3 class="card-title text-center">Create a Blog post</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <x-post-forms.form method="POST" action="{{ route('blog.store') }}" >
      @csrf
      
        

          <x-post-forms.title-input placeholder="Blog title..." value="{{ old('post_title') }}" />
          
          <x-post-forms.desc-input placeholder="Blog description..." >
            {{ old('post_intro') }}
          </x-post-forms.desc-input>
      
           
          <x-post-forms.photo-input />
  
          <x-post-forms.content-input placeholder="The Blog in detail..." >
            {{ old('post_content') }}
          </x-post-forms.content-input>

          <x-post-forms.author-input :authors="$authors" />


    </x-post-forms.form>
  </div>

</x-dashboard.layout>