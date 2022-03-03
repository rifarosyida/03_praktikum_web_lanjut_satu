<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/home">Home</a>
          </li>
          
          {{-- Dropdown Product --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Product
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/product/product1">Product 1</a></li>
              <li><a class="dropdown-item" href="/product/product2">Product 2</a></li>
            </ul>
          </li>

          {{-- Dropdown Program --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Program
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/program/program1">Karir</a></li>
              <li><a class="dropdown-item" href="/program/program2">Magang</a></li>
            </ul>
          </li>

          {{-- Dropdown News --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              News
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/news/1">News 1</a></li>
            <li><a class="dropdown-item" href="/news/2">News 2</a></li>
            </ul>
          </li>

          {{-- Dropdown about us --}}
          <li class="nav-item">
            <a class="nav-link " href="/about-us" >
              About Us
            </a>
          </li>
          {{-- Dropdown contact us --}}
          <li class="nav-item">
            <a class="nav-link " href="/contact-us" >
              Contact Us
            </a>
          </li>
      </div>
    </div>
  </nav>