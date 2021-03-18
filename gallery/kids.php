<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <title>Kids Room</title>
    <link rel="stylesheet" href="../assets/css/kitchen.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>

  <body>



      <nav class="navbar">
      <div class="max-width">
        <div class="logo"><a href="../home.php">Design<span>Web.</span></a></div>
        <ul class="menu">
          <li><a href="../home.php">Home</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../project.php">Projects</a></li>
          <li><a href="../services.php">Services</a></li>
          <li><a href="../index.php">Blog</a></li>
          <li><a href="../contact.php">Contact</a></li>
        </ul>
        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
      </div>
    </nav>





    <!-- header section -->
    <section class="home" id="home">


      <div class="banner-img"></div>



  </section>


  <!-- Photos section start -->

  <section class="why" id="why">
    <div class="max-wit">
      <h2 class="title">Kids Room</h2>
      <div class="why-content">


        <div class="image">
          <h3>Vibrant Kids Bedroom</h3>
          <img src="../assets/images/c1.jpg" alt="">
          </div>

          <div class="image">
              <h3>Alluring Kids Bedroom</h3>
            <img src="../assets/images/c2.jpg" alt="">
            </div>

          <div class="image">
            <h3>Bisque Kids Bedroom</h3>
            <img src="../assets/images/c3.jpg" alt="">
            </div>


            <div class="image">
              <h3>Serene Kids Bedroom</h3>
              <img src="../assets/images/c4.jpg" alt="">
              </div>




                <div class="image">
                  <h3>Roseate Kids Bedroom</h3>
                  <img src="../assets/images/c5.jpg" alt="">
                  </div>

                  <div class="image">
                    <h3>Starry Kids Bedroom</h3>
                    <img src="../assets/images/c6.jpg" alt="">
                    </div>






                    </div>

              </div>

          </section>











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
                  $(window).scroll(function(){
                    if(this.scrollY > 20){
                      $('.navbar').addClass("sticky");
                    }else {
                      $('.navbar').removeClass("sticky");
                    }
                  });




                  //toggle menu/navbar script
                  $('.menu-btn').click(function() {
                    $('.navbar .menu').toggleClass("active");
                    $('.menu-btn i').toggleClass("active");
                  });
                });
              </script>


            </body>

            </html>
