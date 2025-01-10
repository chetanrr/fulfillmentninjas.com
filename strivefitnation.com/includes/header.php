<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<div class="py-3 preheader">
  <div class="text-center">
      <i class="fa-solid fa-phone"></i> <a href="tel:<?php phoneNumber(); ?>"><?php phoneNumber(); ?></a> | <i class="fa-solid fa-envelope"></i> <a href="mailto:<?php email()?>"><?php email()?></a>
  </div>  
</div>

<div class="container">
  <div class="d-flex justify-content-center py-3 topbox">    
    <a class="navbar-brand m-0" href="index.php">
      <?php productName()?>
    </a>    
  </div>

  <header>
      <nav class="navbar navbar-dark navbar-expand-lg bg-transparent py-0">
        <div class="container-fluid px-0">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage == 'aboutus') ? 'active':''; ?>" href="aboutus.php">About us</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage == 'termsandconditions') ? 'active':''; ?>" href="termsandconditions.php">Terms & Conditions</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage == 'privacypolicy') ? 'active':''; ?>" href="privacypolicy.php">Privacy Policy</a></li>
                <li class="nav-item"><a class="nav-link <?= ($activePage == 'contact') ? 'active':''; ?>" href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="d-flex align-items-center justify-content-end">
            <a href="cart.php" class="carticon text-white">Cart <i class="fa-solid fa-cart-shopping"></i></a>
          </div>
        </div>
      </nav>
  </header>
</div>