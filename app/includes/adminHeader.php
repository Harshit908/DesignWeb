<header>
  <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
    <h1 class="logo-text">Design<span>Web.</span></h1>
  </a>
  <i class="fas fa-bars menu-toggle"></i>
  <ul class="nav">
    
    <li><a href="<?php echo BASE_URL . '/index.php'  ?>">Blog</a></li>


    <?php if (isset($_SESSION['username'])): ?>
          <li>
            <a href="#">
              <i class="fa fa-user"></i>
              <?php echo $_SESSION['username']; ?>
              <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
            <ul style="left: 0px;">
              <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Logout</a></li>
            </ul>
          </li>
        <?php endif; ?>

  </ul>
</header>
