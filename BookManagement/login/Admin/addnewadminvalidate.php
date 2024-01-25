<?php
   $uname=$_POST["uname"];
   $upass=$_POST["upass"];
   $con=mysqli_connect("localhost","root","Sk@007007");
   mysqli_select_db($con,"login");
   $q="insert into admin (name,password) values('$uname','$upass')" ;
   mysqli_query($con,$q);
   mysqli_close($con);
?>
<html>
    <body>
        <h2>Admin created Succesfully</h2>
        <a href="admin.php">Go to Admin Login</a><br>
        <a href="addnewadmin.php"> <-back </a>
    </body>
</html>