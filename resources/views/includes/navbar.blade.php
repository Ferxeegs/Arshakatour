<style>
  .navbar-nav .nav-link {
  color: white !important;
  font-size: 17px;
  font-style: normal;
  font-weight: 600;
  margin-top: 5px;
  margin-right: 20px;

  &:hover {
    text-decoration: underline;
  }
}
</style>

<nav
  class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top bg-transparent navbar-scrolled"
>
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{ route('home') }}"
      ><img src="/images/arshaka3.PNG" alt="" style="width: 130px"
    /></a>
    <button
      class="navbar-toggler shadow-none border-0"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div
      class="sidebar offcanvas offcanvas-start"
      tabindex="-1"
      id="offcanvasNavbar"
      aria-labelledby="offcanvasNavbarLabel"
    >
      <div class="offcanvas-header text-white border-bottom">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
          Arshaka Tour
        </h5>
        <button
          type="button"
          class="btn-close btn-close-white shadow-none"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <ul
          class="navbar-nav justify-content-end flex-grow-1 mx-auto mb-lg-0 ps-5"
        >
          <li class="nav-item mx-3 ps-5">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Paket Wisata</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
          </li>
          <li class="nav-item mx-3 pe-5">
            <a class="nav-link" href="{{ route('travel-blog') }}">Travel Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>