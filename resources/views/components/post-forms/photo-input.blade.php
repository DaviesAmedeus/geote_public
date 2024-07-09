<div class="form-group p-3">
    <label for="exampleInputFile">Cover photo</label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="post_picture" id="exampleInputFile">
        @error('post_picture')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
    </div>
  </div>