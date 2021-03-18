<header>
  <a href="<?php echo BASE_URL . '/home.php'  ?>" class="logo">
    <h1 class="logo-text">Design<span>Web.</span></h1>
  </a>
  <i class="fas fa-bars menu-toggle"></i>
  <ul class="nav">
    <li><a href="<?php echo BASE_URL . '/home.php'  ?>">Home</a></li>
    <li><a href="<?php echo BASE_URL . '/about.php'  ?>">About</a></li>
    <li><a href="<?php echo BASE_URL . '/project.php'  ?>">Projects</a></li>
    <li><a href="<?php echo BASE_URL . '/services.php'  ?>">Services</a></li>
    <li><a href="<?php echo BASE_URL . '/index.php'  ?>">Blog</a></li>
    <li><a href="<?php echo BASE_URL . '/contact.php'  ?>">Contact</a></li>

    <?php if (isset($_SESSION['id'])): ?>

    <li>
      <a href="#">
        <i class="fa fa-user"></i>
        <?php echo $_SESSION['username']; ?>
        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
      </a>
      <ul style="left: 0px;">
        <?php if($_SESSION['admin']): ?>
            <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
          <?php endif; ?>

        <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
      </ul>
    </li>

    <?php else: ?>

        <li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>
        <li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>

    <?php endif; ?>



  </ul>
</header>
