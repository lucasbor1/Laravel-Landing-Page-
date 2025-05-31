<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm">
  <div class="container position-relative">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center fw-bold position-relative" style="z-index: 1001;" href="#">
      <img src="{{ asset('images/Icone.png') }}" alt="Logo" width="30" height="30" class="me-2">
      Lalasia
    </a>

    <!-- Toggler para mobile -->
    <button class="navbar-toggler position-relative" style="z-index: 1001;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Itens centralizados -->
    <div class="collapse navbar-collapse justify-content-center position-absolute start-0 end-0" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mx-2">
          <a class="nav-link text-dark fw-semibold" href="#">Product</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-dark fw-semibold" href="#">Services</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-dark fw-semibold" href="#">Article</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link text-dark fw-semibold" href="#">About Us</a>
        </li>
      </ul>
    </div>

    <!-- Ícones à direita -->
    <div class="d-flex align-items-center position-relative" style="z-index: 1001;">
      <a href="#" class="text-dark fs-5 me-3">
        <i class="bi bi-bag"></i>
      </a>
      <a href="#" class="text-dark fs-5">
        <i class="bi bi-person"></i>
      </a>
    </div>
  </div>
</nav>
