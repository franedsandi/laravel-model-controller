<header>
  <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('Home')}}">Movie something</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('Home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'Movies' ? 'active' : ''}}" href="{{route('Movies')}}">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Route::currentRouteName() == 'Contacts' ? 'active' : ''}}" href="{{route('Contacts')}}">Contacts</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" fdprocessedid="3qxp7m">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
