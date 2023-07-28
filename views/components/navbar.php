<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav" hx-boost="true">
        <a class="nav-link <?= current_page() == '/' ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
        <a class="nav-link <?= current_page() == '/about' ? 'active' : '' ?>" href="/about">About</a>
      </div>
    </div>
  </div>
</nav>