<div class="form-group p-3">
    <select class="form-select form-select-sm" name="status">
      <option selected="">Project Status</option>
      <option value="Completed">Completed</option>
      <option value="Inprogress">Inprogress</option>
      <option value="Pending">Pending</option>
    </select>
    @error('status')
    <span class="text-danger">{{ $message }}</span>
    @enderror
    </div>