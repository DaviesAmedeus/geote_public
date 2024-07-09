<div class="form-group p-3">
    {{-- <label for="postDescription">Content</label> --}}
    <div id="editor">
    <textarea {{ $attributes(["class"=>"form-control-plaintext", "name"=>"post_content",  "id"=>"content", "cols"=>"10"]) }} >{{ $slot }}</textarea>
    </div>  
    @error('post_content')
      <span class="text-danger">{{ $message }}</span>
      @enderror
    </div>