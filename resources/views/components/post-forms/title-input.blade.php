<div class="form-group p-3">
    <div id="editor">
    <input  {{$attributes(["type"=>"text", "name"=>"post_title",  "class"=>"form-control-plaintext", "id"=>"post_title" ])}} >
    </div>
    @error('post_title')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>