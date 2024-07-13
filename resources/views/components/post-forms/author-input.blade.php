@props(['authors'])

<div class="form-group p-3">
    <div class="row pb-2 gy-4 align-items-center">
        <div class="col-3">
            <label for="inputSelectMultiple" class="btn btn-sm  disabled">Authors</label>
        </div>
        <div class="col-1">
                or
        </div>
        <div class="col-3">
            <a type="submit" class="btn btn-outline-secondary btn-sm">Insert Author</a>

        </div>

    </div>
    <select class="form-select" multiple="" name="author_id" aria-label="Multiple select" id="inputSelectMultiple">
    @foreach ($authors as $author )
    <option value="{{ $author->id }}">{{ $author->author_name }}</option>
    @endforeach
    </select>
</div>