<section class="my-navbar">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #eaf8ff !important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?= LINK; ?>public/images/logo-70x70.png" alt="Your Print Logo">  
    YourPrint</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Your Demand</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Your Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Track Your Order" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Track</button>
      </form>
    </div>
  </div>
</nav>
</section>