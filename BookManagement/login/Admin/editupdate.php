<?php
   $ename=$_POST["ename"];
   $epass=$_POST["epass"];
   $con=mysqli_connect("localhost","root","Sk@007007");
   $sel=mysqli_select_db($con,"login");if($sel){echo' datbase selected';}
   $q="update admin set name='$ename', password='$epass' where id=1 ";
   $res=mysqli_query($con,$q);
   
   mysqli_close($con);
   if($q){
    header("location:admin.php");
   }
?>
