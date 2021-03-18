<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

  if (isset($_GET['id'])) {
      $post = selectOne('posts', ['id' => $_GET['id']]);
  }

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $post['title']; ?> | DesignWeb</title>
  <link rel="stylesheet" href="assets/css/single.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- // Slick Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

<div id="container">
  <div id="main">





  <?php include(ROOT_PATH . "/app/includes/header.php");  ?>








  <!-- Page Wrapper -->
  <div class="page-wrapper">





    <!-- Content -->
    <div class="content clearfix">


      <!--Main Content Wrapper -->
      <div class="main-content-wrapper">
      <div class="main-content single">
        <h1 class="post-title"><?php echo $post['title']; ?></h1>

        <div class="post-content">
          <?php echo html_entity_decode($post['body']); ?>
        </div>





      </div>
    </div>
      <!--// Main Content -->


      <!--  Sidebar -->
      <div class="sidebar single">

        <div class="section popular">
          <h2 class="section-title">Popular</h2>

          <?php foreach ($posts as $p): ?>
              <div class="post clearfix">
                <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                <a href="" class="title"><h4><?php echo $p['title'] ?></h4></a>
              </div>
          <?php endforeach; ?>


        </div>

        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>

            <?php foreach ($topics as $topic): ?>
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            <?php endforeach; ?>

          </ul>
        </div>

      </div>
      <!-- // Sidebar -->


    </div>
    <!-- // Content -->



  </div>
  <!--  // Page Wrapper -->











</div>
</div>


  <!-- footer section -->
  <footer id="footer">
    <span><span class="far fa-copyright"></span> Copyright 2020 DesignWeb </span>
    <div class="social">
      <a href="https://www.instagram.com/designwebstudios/">
        <i class="fa fa-instagram"></i>
      </a>

      <a href="https://www.facebook.com/designwebstudios">
        <i class="fa fa-facebook"></i>
      </a>

      <a href="mailto:designwebstudios@gmail.com">
        <i class="fa fa-google"></i>
      </a>
    </div>
  </footer>
  <!-- //footer -->






  <script>
    $(document).ready(function() {
      $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass("showing");
        $('.nav ul').toggleClass("showing");
      });



    });
  </script>



</body>

</html>
