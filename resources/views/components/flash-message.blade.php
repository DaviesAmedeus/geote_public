@if(session()->has('message'))
<div class="row justify-content-center">
  <div x-data="{show: true}" x-init="setTimeout(()=> show = false, 3000)"
    x-show="show" class="mt-5 alert alert-success col-8" role="alert">
   {{ session('message') }}
 </div> 
</div>
@endif

