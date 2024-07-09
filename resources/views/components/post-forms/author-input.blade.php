@props(['authors'])

<div class="form-group p-3">
    <label for="inputSelectMultiple" class="form-label">Select the author</label>
    <select class="form-select" multiple="" name="author_id" aria-label="Multiple select" id="inputSelectMultiple">
    @foreach ($authors as $author )
    <option value="{{ $author->id }}">{{ $author->author_name }}</option>
    @endforeach
    </select>
</div>