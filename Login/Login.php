<?php
session_start();


?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="cover.css">
  <script type="text/javascript" src="ananthu.js"></script>
</head>
<body>

  <div class="container">
  
    <div class="login form">
      <header>Login</header>
<?php if(isset($_GET['error'])){?>
  <p class="error"><?php echo $_GET['error'];?> </p>
  <?php
  
}
  ?>
         <?php if(isset($_GET['sucess'])){?>
  <p class="sucess"><?php echo $_GET['sucess'];?> </p>
  <?php
  
}
?>
      <form action="connect.php" method="POST">
      <input type="text" placeholder="Enter the username" name="name" >
        <input type="password" placeholder="Enter your password" name="pass" >
        <a href="#">Forgot password?</a>
        <input type="submit" class="button"  name="create"  value="Log In" />
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
        <a href="../Registration/Registration.php">signup</a>
        </span>
      </div>
    </div>
</div>
   
</body>
</html>

