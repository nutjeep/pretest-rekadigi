<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/">Tuffiseals</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <form action="/logout" method="post">
      @csrf
      <div class="nav-item text-nowrap">
        <button class="nav-link px-3 btn btn-danger text-white" type="submit">Sign out</button>
      </div>
    </form>
  </div>
</header>