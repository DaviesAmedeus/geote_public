<x-dashboard.admin-layout>
    <div class="container p-5">
        <div class="main-body">
            <div class="row">
                
                <div class="col ">
                    
                    <div class="card card-primary m-5">
                        <div class="card-header">
                            <h3 class="card-title text-center">Insert Author</h3>
                          </div>
                        <div class="card-body align-items-center" >

                            @if (session()->has('message'))
                                
                            <div class="col-sm-9  text-center alert alert-success" role="alert">
                                User was created
                              </div>
                                
                            @endif
    
                            <form action="{{ route('author.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="author_name" placeholder="Author fullname..." class="form-control" value="">
                                        @error('author_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                
                                
                                <div class="row mb-3">
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" class="form-control" placeholder="Profile picture" name="author_profile_pic" id="inputFile">
                                        @error('author_profile_pic')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row mb-3">                                
                                    <div class="col-sm-9 text-secondary">
                                        <textarea name="author_bio" placeholder="Author short description..." class="form-control" id="" cols="30" rows="10"></textarea>
                                        @error('author_bio')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
    
                                
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</x-dashboard.layout>



