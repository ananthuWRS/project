<?php
include('../config.php');
session_start();

//login form validation in php

if(empty($_POST['name'])){
  header("Location:Login.php ? error=username is required");
}
elseif(empty($_POST['pass'])){
  header("Location:Login.php ? error=password is required");
}
else{
 
   
  $name      =($_POST['name']);
  $pass   =($_POST['pass']);
  $hash   =md5($pass);
  $sql = "select * from users where user=? and password = ?";
  $statement = $conn->prepare($sql);
  $statement->execute([$name,$hash]);
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

    
    ?>