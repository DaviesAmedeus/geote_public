<div class="form-group p-3">
  <textarea {{ $attributes(["class"=>"form-control-plaintext", "name"=>"post_intro",  "id"=>"post_intro"]) }} >{{ $slot }}</textarea>
  @error('post_intro')
  <span class="text-danger">{{ $message }}</span>
  @enderror
</div>