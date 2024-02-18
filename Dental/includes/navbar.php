<header class="header" id="header">
  <nav class="nav bd-container">
    <!-- <a href="index.php"><li href="index.php" class="nav__logo" style="font-size: larger;">Tayouth</li></a> -->
    <img src="img/logo.png" style="width: 50px; height: 45px; border-radius: 60px;"> 
    <div class="nav__menu mt-lg-3" id="nav-menu">
      <ul class="nav__list ">
        <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
        <li class="nav__item text-white"><a href="503.php" class="nav__link">About</a></li>
        <li class="nav__item text-white"><a href="503.php" class="nav__link">Contact Us</a></li>

        <?php
        if (isset($_SESSION['auth'])) {
        ?>
          <li class="nav-item nav__item dropdown">
            <a class="dropdown-toggle nav__link" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
              <?= $_SESSION['auth_user']['name']; ?>
            </a>
            <ul class="dropdown-menu text-white">
              <li><a class="nav__link dropdown-item text-black" href="503.php"><i class="fa-solid fa-cart-shopping fa-xs pe-lg-2"></i>Appointment History</a></li>
              <li><a class="nav__link dropdown-item text-black" href="edit-acc.php"><i class="fa-solid fa-user fa-xs pe-lg-2"></i>My Profile</a></li>
              <li><a class="nav__link dropdown-item text-black" href="logout.php"><i class="fa-solid fa-right-from-bracket fa-xs pe-lg-2"></i>Logout</a></li>
            </ul>
          </li>
        <?php
        } else {
        ?>
          <li class="nav__item">
            <a href="login.php" class="nav__link text-center text-white">Sign in
            </a>
          </li>
        <?php
        }
        ?>
      </ul>
    </div>
    <div class="nav__toggle" id="nav-toggle">
      <i class="fa-solid fa-bars"></i>
    </div>
  </nav>
</header>