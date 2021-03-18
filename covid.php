<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="assets/css/covid.css">
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
    <div class="text-1">Your dream home is in safe hands</div>


  </section>







  <!-- Process section start  -->
  <section class="process" id="process">
    <div class="max-width">

      <div class="process-content">
        <div class="column left">
          <img src="assets/images/co1.jpg" alt="">
        </div>
        <div class="column right">
          <div class="text">How Design Thinking Can Help Manage Risk, Spur Recovery, Build Resilience and Inspire Reinvention in a Post-COVID World</div>
          <div class="hori">________________________________________</div>

          <p><br>Our workplaces are strategic tools for doing business, but like many things during this time, they are sitting dormant. They are not working for us.<br>In the rush to re-occupy them we have lost sight of one of the fundamental flaws exposed by the pandemic; work was never a place. It was always a thing we did.<br>For decades, we’ve talked about the myriad reasons that workplaces—and more specifically, their design—should put the needs of people first. Above real estate costs, above brand awareness, above management preferences. Now, putting people first is not simply beneficial — it’s pivotal.</p>

        </div>

      </div>
    </div>
  </section>



  <section class="process-2" id="process-2">
    <div class="max-width">
      <div class="process-2-content">
        <div class="column left">
          <div class="text">The green zone of home interiors</div>
          <div class="hori">___________________________________</div>

          <p><br>Building a safer environment for you, our vendors, and our employees is our biggest priority. From our Experience Centres to our warehouses, and from our factories to your new homes, we are following strict safety protocols to make it a green zone for you. We recommend taking a systems approach to thinking about the future of work. What do you need now to maintain productivity? What changes should you make in the near term to be more resilient when the next crisis impacts your enterprise? And most importantly, for those looking for the best long-term value, how can a future-focused approach position you to transform work for long-term prosperity?<br> Since the onset of COVID-19, we’ve witnessed amazing innovation, and a decade’s worth of change has occurred in a matter of months.<br><br>The darkness of this pandemic will pass; the moment is transient. Let’s capitalize on this opportunity for transformation.</p>


        </div>
        <div class="column right">
          <img src="assets/images/co2.jpg" alt="">
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
