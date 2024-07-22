@props(['user'=>true])


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#sidebar"
        aria-controls="offcanvasExample"
      >
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <h3
        class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
        href="#"
        >ADMIN DASHBOARD</h3
      >
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#topNavBar"
        aria-controls="topNavBar"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        {{-- <form class="d-flex ms-auto my-3 my-lg-0">
          <div class="input-group">
            <input
              class="form-control"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-primary" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form> --}}
        <a  class="nav-link d-flex ms-auto my-3 my-lg-0" href="{{ route('home') }}">Home</a>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle ms-2"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false">
              {{ Auth::user()->name }}
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="{{ route('user.profile', ['id'=> Auth::user()->id]) }}">My profile</a></li>
              <li>
                <a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>