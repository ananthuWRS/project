<?php
session_start();

if(isset($_SESSION["username"]))
{
    if((time() - $_SESSION['last_time']) >60)

{
  
 
 header("location:logout.php");
}




   else{
    echo '<h3>Login Successs , Welcome ' .$_SESSION["username"].'</h3>';
    ?>
    <div class="clock">
         
    <div id="ten-countdown"></div>
    
    <script src="js/indexs.js"></script>
    
    
    </div> <?php
?>

      <?php

    include('../config.php');
    $name =$_SESSION["username"];
    $query = "select * from users where user= :name";
    $statement=$conn->prepare($query);
    
    $data=[':name' => $name];
    $statement->execute($data);
     $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
     if($result)
     {
      ?>
       
     
      <?php foreach ($result as $iteam){ ?>
        <html>
          <head><link rel="stylesheet" href="homes.css"></head>
          <body>
          <h2>Personal Details</h2>
        <div class="card">
      <div class="container">
      
        <h4><b>username:&nbsp &nbsp<?php echo $iteam['email'];?> </b></h4> 
        <h4><b>phone Number:&nbsp &nbsp<?php echo $iteam['number'];?> </b></h4> 
        <h4><b>username:&nbsp &nbsp<?php echo $iteam['user'];?> </b></h4> 
        <h4><b>password:&nbsp &nbsp<?php echo $iteam['password'];?> </b></h4> 
      </div>
      </div>
 
     
    
         
      </body>
         </html>
      
         <?php
        
         
         }  
        
     }
     





   }

}




?>









