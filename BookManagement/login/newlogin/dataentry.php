    <?php
   $nname=$_POST["nuser"];
   $npass=$_POST["npassword"];
    $con=mysqli_connect("localhost","root","Sk@007007");
     mysqli_select_db($con,"login");
     $q="insert into user (username,password) values('$nname','$npass')";
     $query=mysqli_query($con,$q);
     if($query){
        header('location:http://localhost/BookManagement/login/login.php');
     }
?>