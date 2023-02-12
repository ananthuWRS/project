<!DOCTYPE html>
`
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="Register.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript" src="ananthu.js"></script>
  </head>
  <body>

    <section class="wrapper">
      <div class="form signup">
        <header>Signup</header>
        <?php if(isset($_GET['error'])){?>
  <p class="error"><?php echo $_GET['error'];?> </p>
  <?php
  
}
?>
      <form action="connect.php" method="POST">
        <input type="text" placeholder="Full name" name="name" value ="<?php 
           session_start();
           if(isset($_GET['error'])) 
           {echo $_SESSION['name'] ;
           } ?>"  >
          <input type="email" placeholder="Email address"  name="email" 
          value ="<?php 
           if(isset($_GET['error'])) 
           {echo $_SESSION['email'] ;
           } ?>" 
         />
          <input type="text" placeholder="Phone Number" name="number"  maxlength="10"value ="<?php 
           if(isset($_GET['error'])) 
           {echo $_SESSION['number'] ;
           } ?>"  />
          <input type="text" placeholder="Username"  name="user" 
          value ="<?php 
           if(isset($_GET['error'])) 
           {echo $_SESSION['user'] ;
           } ?>"  />
          <input type="Password" placeholder="Password" name="pass"  />
        <input type="password" placeholder="Confirm password" required name="confirm"/>
        <div class="g-recaptcha" data-sitekey="6Lc5EXMkAAAAACE-MozggecPlNF4yseqsG6a_0so"></div>
          <input type="submit"name="create"  value="Signup" />
        </form>
      </div>

      
    </section>

    
  </body>
  </html>