<?php
  session_start();
 $aname=$_POST["auser"];
 $apassword=$_POST["apassword"];
 $con=mysqli_connect("localhost","root","Sk@007007");
 mysqli_select_db($con,"login");
 $q="select * from admin where name='$aname' and password='$apassword'";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1){
   $_SESSION["auser"]=$aname;
    header("location:http://localhost/BookManagement/login/Admin/Adminhome.php");
 }else{
    header("location:http://localhost/BookManagement/login/Admin/admin.php");
 }
?>