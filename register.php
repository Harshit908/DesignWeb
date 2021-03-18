<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" , initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

  <?php include(ROOT_PATH . "/app/includes/header.php");  ?>



<div class="auth-content">

  <form action="register.php" method="post">
    <h2 class="form-title">Register</h2>

  <?php include(ROOT_PATH . "/app/helpers/formErrors.php");  ?>






    <div>
      <lable>Username</lable>
      <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
    </div>
    <div>
      <lable>Email</lable>
      <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
    </div>
    <div>
      <lable>Password</lable>
      <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
    </div>
    <div>
      <lable>Password Confirmation</lable>
      <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
    </div>
    <div>
      <button type="submit" name="register-btn" class="btn btn-big">Register</button>
    </div>
    <p>Or <a href="<?php echo BASE_URL . '/login.php'  ?>">Sign In</a></p>
  </form>

</div>

























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
