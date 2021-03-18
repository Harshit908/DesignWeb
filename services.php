<?php include("path.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <title>Services</title>
  <link rel="stylesheet" href="assets/css/services.css">
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
    <div class="text-1">Services</div>


  </section>







  <!-- Process section start  -->
  <section class="process" id="process">
    <div class="max-width">

      <div class="process-content">
        <div class="column left">
          <img src="assets/images/resi.jfif" alt="">
        </div>
        <div class="column right">
          <div class="text">Residential Design</div>
          <div class="hori">_______________________________</div>

          <p><br>OUR GOAL IS TO TURN YOUR HOUSE INTO A HOME AND REALLY CHANGE THE ENERGY, FUNCTION AND AESTHETICS OF THE
SPACE TO FIT YOUR LIFESTYLE.  ​WHETHER YOU'RE EMBARKING ON A NEW BUILD, COMPLETE REMODEL,
​OR YOU'RE READY FOR FINISHING TOUCHES, WE CAN  HELP YOU TRANSFORM YOUR SPACE.<br><br>

OUR SERVICES INCLUDE: SPACE PLANNING AND FURNITURE LAYOUT, ARCHITECTURAL PLAN REVIEW,
CONSTRUCTION DRAWINGS FOR BID, FINISH MATERIAL SELECTIONS, KITCHEN & BATH DESIGN,​3D RENDERINGS,
​TRIM WORK DESIGN, FURNITURE SELECTIONS AND PROCUREMENT, ​WINDOW AND WALL TREATMENTS, AND ACCESSORIZING.<br><br>

WE KNOW THERE ARE MANY DECISIONS TO MAKE FROM START TO FINISH IN A NEW DESIGN, SO WE WALK YOU THROUGH THE DECISION
MAKING PROCESS STEP BY STEP, AND CAN OFFER 3D RENDERINGS TO GIVE YOU A VISUAL ALONG THE WAY SO YOU
​CAN SEE YOUR SELECTIONS COMING TOGETHER!  WE ARE YOUR ADVOCATE FROM CONCEPT THROUGH EXECUTION.​ </p>

        </div>

      </div>
    </div>
  </section>



  <section class="process-2" id="process-2">
    <div class="max-width">
      <div class="process-2-content">
        <div class="column left">
          <div class="text">Contract Design</div>
          <div class="hori">___________________________</div>

          <p><br>COMPANIES THESE DAYS SEE THE VALUE IN CREATING A NICE ENVIRONMENT TO WELCOME
BOTH GUESTS AND EMPLOYEES AND WE CAN HELP YOU CRAFT THOSE SPACES
AND BUILD THEM OUT TO FIT YOUR NEEDS.<br><br>

WE OFFER A FULL RANGE OF INTERIOR DESIGN SERVICES FOR YOUR COMMERCIAL PROJECT.
FROM CHOOSING PAINT COLORS TO CREATING COMPREHENSIVE DESIGN SCHEMES, WE CAN HELP YOU WITH THE SMALL DETAILS
OR THE BIG PICTURE.   ​WE HAPPILY PARTNER WITH YOUR ARCHITECT OR CONTRACT FURNITURE DEALER TO CREATE A BEAUTIFUL SPACE.
​WE CAN OFFER 3D RENDERINGS OF THE PROPOSED DESIGN TO ENSURE ALL PARTIES APPROVE AND ARE MOVING FORWARD WITH THE SAME VISION IN MIND.<br><br>

SERVICES INCLUDE: DEVELOPMENT OF FLOOR PLANS , MILLWORK DESIGN, ADA COMPLIANCE,
SELECTING FINISHES, STYLE & DESIGN SCHEME, 3D RENDERINGS, FURNITURE SELECTION,
FABRIC & COLOR COORDINATION, SELECTION OF ARTWORK & ACCESSORIES.</p>


        </div>
        <div class="column right">
          <img src="assets/images/contract.jpg" alt="">
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
