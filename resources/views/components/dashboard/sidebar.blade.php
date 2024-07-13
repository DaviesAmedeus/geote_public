<div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar" >
      
    <div class="offcanvas-body p-0">

        <nav class="navbar-dark">

          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                MAIN
              </div>
            </li>
            <li>
              <a href="{{ route('user.home') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>


            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              {{-- <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Create
              </div> --}}
            </li>

            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts" >
                <span class="me-2"><i class="bi bi-tools"></i></span>
                <span>Create</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="{{ route('blog.create') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-book-fill"></i
                      ></span>
                      <span>Create Blog post</span>
                    </a>
                  </li>
                  {{-- <li>
                    <a href="{{ route('updates.create') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-book-fill"></i
                      ></span>
                      <span>Create News/Updates</span>
                    </a>
                  </li> --}}
                  <li>
                    <a href="{{ route('projects.create') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-book-fill"></i
                      ></span>
                      <span>Create Project</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </li>


            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#editings" >
                <span class="me-2"><i class="bi bi-tools"></i></span>
                <span>Editings</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="editings">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="{{ route('user.allposts') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-book-fill"></i
                      ></span>
                      <span>Edit blog posts</span>
                    </a>
                  </li>
                  {{-- <li>
                    <a href="{{ route('user.allUpdates') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-book-fill"></i
                      ></span>
                      <span>Edit News/Updates</span>
                    </a>
                  </li> --}}
                  
                  <li>
                    <a href="{{ route('user.allProjects') }}" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-book-fill"></i
                      ></span>
                      <span>Edit Project</span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </li>



            

            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-book-fill"></i></span>
                <span>Pages</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>

          
        </nav>

      </div>

</div>  


