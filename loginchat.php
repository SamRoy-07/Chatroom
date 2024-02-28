<?php
include "db.php";
session_start();

if(isset($_POST["name"]) && isset($_POST["Id"])){
  
  $name=$_POST["name"];
  $Id=$_POST["Id"];

  $q="SELECT * FROM `users` WHERE uname='$name' && Id='$Id'";
  
  if($rq=mysqli_query($db,$q)){

    if(mysqli_num_rows($rq)==1){
      
      $_SESSION["userName"]=$name;
      $_SESSION["Id"]=$Id;
      header("location: index.php");



    }else{


      $q="SELECT * FROM `users` WHERE Id='$Id'";
      if($rq=mysqli_query($db,$q)){
        if(mysqli_num_rows($rq)==1){
          echo "<script>alert($Id+' is already taken by another person')</script>";
        }else{

          $q="INSERT INTO `users`(`uname`, `Id`) VALUES ('$name','$Id')";
          if($rq=mysqli_query($db,$q)){
            $q="SELECT * FROM `users` WHERE uname='$name' && Id='$Id'";
            if($rq=mysqli_query($db,$q)){
              if(mysqli_num_rows($rq)==1){

                $_SESSION["userName"]=$name;
                $_SESSION["Id"]=$Id;
                header("location: index.php");

              }
            }

          }

        }
      }
    }
  }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChatRoom</title>
  <style>
      body {
      background-color: red;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login {
      background-color: white;
      width: 400px;
      border: 30px;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: red;
      justify-content: center;
      text-align: center;   
    }

    h2{
      justify-content: center;
      text-align: center;
    }

    h3 {
      margin-bottom: 2px; 
    }

    

    p{
      justify-content: center;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    input {
      height: 25px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 10px;
      background-color: black;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color:  rgb(71, 74, 71);
    }
  
 
    </style>
  
</head>
<body>
<div class="login">
  <h1>ChatRoom</h1>
  
    <h2>Login</h2>
    <p>
    <a href="Reason.html">Why should I login again?</a></p>
    <form action="" method="post">

      <h3>User Name</h3>
      <input type="text" placeholder="Cyber Space name" name="name">

      <h3>Id</h3>
      <input type="text"  name="Id">

      <button>Login / Register</button>

    </form>
  </div>
</body>
</html>