<div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar" >
      
    <div class="offcanvas-body p-0">

        <nav class="navbar-dark">

          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                ADMIN
              </div>
            </li>
            <li>
              <a href="{{ route('admin.home') }}" class="nav-link px-3 active">
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
              <a href="{{ route('author.create') }}" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-fill"></i></span>
                <span>Create Author</span>
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


