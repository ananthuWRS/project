<?php
include('../config.php');
session_start();


if(empty($_POST['name'])){
  header("Location:Login.php ? error=username is required");
}
elseif(empty($_POST['pass'])){
  header("Location:Login.php ? error=password is required");
}
else{
  $name      =($_POST['name']);
  $pass   =($_POST['pass']);
  $sql = "select * from users where user=? and password = ?";
  $statement = $conn->prepare($sql);
  $statement->execute([$name,$pass]);
  $count = $statement->rowCount();

  if($count> 0){
    
    $_SESSION["username"] = $_POST["name"];
    $_SESSION["last_time"]=time();

    
 header("location:../Home/home.php");
  }
  else{
    header("Location:Login.php ? error=incorrect username or password");
  }
}

  //   if(isset($_POST['name']) && isset($_POST['pass'])){
  //     function validate($data){
  //       $data = trim($data);
  //       $data = stripslashes($data);
  //       $data = htmlspecialchars($data);
  //         return $data;
  //     }
  //     $name    = validate($_POST['name']);
  //    

  // if(empty($name && $password)){
  //   header("Location:Login.php? error=user name and password is requird");
  //   exit();
  // }

  //     elseif(empty($name)){
  //      header("Location:Login.php? error=user name is requird");
  //      exit();
  //     }
  //     elseif(empty($password)){
  //       header("Location:Login.php? error=password is requird");
  //       exit();

  //     }
  //     else{
       
   
      // }
     
    //   $password     =$_POST['pass'];
    
     
      // }
       
    
    ?>