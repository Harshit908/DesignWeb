<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="assets/css/contact.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>



  <nav class="navbar">
    <div class="max-width">
      <div class="logo"><a href="home.php">Design<span>Web.</span></a></div>
      <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="project.php">Projects</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="index.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <div class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>





  <!-- header section -->
  <section class="home" id="home">


    <div class="banner-img"></div>
    <div class="text-1">Contact Us</div>


  </section>



  <!-- contact section -->
  <section class="contact" id="contact">
    <div class="max-width">

      <div class="contact-content">
        <div class="column left">
          <div class="text">Get in Touch</div>
          <div class="icons">
            <div class="row">
              <i class="fa fa-phone"></i>
              <div class="info">
                <div class="head">Call Us</div>
                <div class="sub-title">+91-7342-380-842</div>
              </div>
            </div>

            <div class="row">
              <i class="fa fa-envelope"></i>
              <div class="info">
                <div class="head">Email Us</div>
                <div class="sub-title">designwebstudios@gmail.com</div>
              </div>
            </div>

            <div class="row">
              <i class="fa fa-map-marker"></i>
              <div class="info">
                <div class="head">Address</div>
                <div class="sub-title">Mumbai, India</div>
              </div>
            </div>


          </div>


        </div>



        <div class="column right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.8463001775945!2d73.0528777148721!3d19.02649328711634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c24393d763af%3A0x266652df8009380d!2sBharati%20Vidyapeeth%20College%20of%20Engineering%2C%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1607779847986!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>




      </div>
    </div>
  </section>



  <section class="process" id="process">
    <div class="max-width">
      <h2 class="title">Send Request</h2>
      <div class="process-content">

          <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label>Email Id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>

            <div class="form-group">
                <label>Essence of your Design Project</label>
                <textarea class="form-control-2" name="comments"></textarea>
            </div>


            <div>
                <button type="submit" class="btn btn-big">Submit</button>

              </div>
          </form>


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
