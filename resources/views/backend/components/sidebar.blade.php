<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/">
          <h5>GAS</h5>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard*') ? 'active' : ' ' }}" aria-current="page"
          href="/dashboard">
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('pages*') ? 'active' : ' ' }}" href="/pages">
          Pages
        </a>
      </li>
       
       
       
      <li class="nav-item">
        <form action="/logout" method="post">
          @csrf
          <a class="nav-link btn text-start text-danger" type="submit">
            Logout
          </a>
        </form>
      </li>
    </ul>
  </div>
</nav>
