<x-dashboard.admin-layout>
    <div class="row ">
        <div class="col-md-12 mb-3">
          @if (count($authors)>0)
          <div class="card">
            <div class="card-header">
              <span><i class="bi bi-table me-2"></i></span> Authors of the blog
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="example"
                  class="table table-striped "
                  style="width: 100%"
                >
                  <thead>
                    <tr>
                      <th>Author name</th>
                      <th>Number of posts</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->author_name }}</td>
                        <td>{{ $author->id }}</td>
                        <td><a href="" class="btn btn-outline-secondary btn-sm">Update Author</a></td>
                        <td>
                            <form action="{{ route('author.delete', ['id'=>$author->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete Author</button>
                            </form>
                        </td>
                      </tr>  
                    @endforeach
                    
                  </tbody>
                 
                
                </table>
              </div>
            </div>
          </div> 
          @endif
            
        </div>
      </div>
</x-dashboard.admin-layout>