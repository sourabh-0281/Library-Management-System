<?php
session_start();
  $username=$_POST["username"];
  $password=$_POST["password"];
  $con=mysqli_connect("localhost","root","Sk@007007");
  $sel=mysqli_select_db($con,"login");
  $q="select * from user where username='$username' and password='$password'";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);//value will be 1 or 0
  if($num==1){
      $_SESSION["username"]=$username;
      header('location:http://localhost//BookManagement/login/home/home.php');
  }else{
    header('location:http://localhost/BookManagement/login/login.php');
  }
?>