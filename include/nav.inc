<style>
  nav {
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
  }

  .nav-brand {
    font-size: 26px;
    font-weight: 900;
    margin-right: 10px; /* Adjust the space as needed */
  }

  .nav-cart {
    font-size: 28px;
    display: flex;
    align-items: center;
  }

  .nav-icon {
    font-size: 32px;
    vertical-align: middle;
    color: green; /* Set the shop icon color to green */
  }

  .nav-cart .bi-cart {
    color: green; /* Set the cart icon color to green */
  }

  .navbar-nav .nav-item .nav-link {
    display: flex;
    align-items: center;
  }
</style>

<nav class="navbar fixed-top navbar-expand bg-body-tertiary pt-3 pb-3" style="background-color: #fff!important;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <span class="nav-brand">Grab-N-Go Corner</span>
      <i class="bi bi-shop nav-icon"></i>
    </a>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item pe-2">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item nav-cart">
        <?php
          if (/* PUT FILLED CART LOGIC HERE */ 1 == 1) {
        ?>
        <a href="<?php echo (basename($_SERVER['PHP_SELF']) === 'signup.php') ? 'login.php' : ((basename($_SERVER['PHP_SELF']) === 'login.php') ? 'login.php' : 'login.php'); ?>">
          <i class="bi bi-cart"></i>
        </a>
        <?php
          } else {
        ?>
        <i class="bi bi-cart"></i>
        <?php
          }
        ?>
      </li>
    </ul>
  </div>
</nav>
