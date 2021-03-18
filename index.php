<?php
include("path.php");

include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

  if (isset($_GET['t_id'])) {
      $posts = getPostsByTopicId($_GET['t_id']);
      $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
  }

    else if (isset($_POST['search-term'])) {
      $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
      $posts = searchPosts($_POST['search-term']);
    } else {
      $posts = getPublishedPosts();
    }





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Interior Designing</title>
  <link rel="stylesheet" href="assets/css/style.css">
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



  <?php include(ROOT_PATH . "/app/includes/header.php");  ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>




  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Post slider -->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <?php foreach ($posts as $post): ?>
              <div class="post">
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                <div class="post-info">
                  <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                  <i class="far fa-user"> <?php echo $post['username']; ?></i>
                  &nbsp;
                  <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                </div>
              </div>
            <?php endforeach; ?>




      </div>

    </div>
    <!-- //Post slider -->


    <!-- Content -->
    <div class="content clearfix">

      <!--Main Content -->
      <div class="main-content">
        <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

        <?php foreach ($posts as $post): ?>

        <div class="post clearfix">
          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
          <div class="post-preview">
            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
              <i class="far fa-user"> <?php echo $post['username']; ?></i>
              &nbsp;
              <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
              <p class="preview-text">
                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
              </p>
              <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
          </div>
        </div>
      <?php endforeach; ?>


      </div>
      <!--// Main Content -->


      <div class="sidebar">

        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>


        <div class="section topics">
          <h2 class="section-title">Topics</h2>
          <ul>


                          <?php foreach ($topics as $key => $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                          <?php endforeach; ?>

          </ul>
        </div>

      </div>


    </div>
    <!-- // Content -->



  </div>
  <!--  // Page Wrapper -->











  <!-- footer section -->
  <footer>
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











  <script>
    $(document).ready(function() {
      $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass("showing");
        $('.nav ul').toggleClass("showing");
      });

      $('.post-wrapper').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 850,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });

    });
  </script>



</body>

</html>
