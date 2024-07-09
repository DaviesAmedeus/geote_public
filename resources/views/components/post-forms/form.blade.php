<form {{ $attributes(["enctype"=>"multipart/form-data"]) }}>
   

    <div class="card-body">

    {{ $slot }}
    </div>
    <div class="card-footer">
        <div class="d-grid col-4 mx-auto ">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
</form>
