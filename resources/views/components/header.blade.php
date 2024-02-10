<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
       <img id="img-logo" src="{{ Vite::asset ('resources/img/dc-logo.png') }}" alt="">
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#"> Disabled</a>
        </li>
      </ul>
    </div>

    <div class="container-fluid">
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
</nav>
</header>
