<?php
    session_start();
    $con=mysqli_connect("localhost","root","Sk@007007");
    mysqli_select_db($con,"login");
    $name=$_POST["user"];
    $pass=$_POST["password"];
    $email=$_POST["email"];
    $q="update user set username='$name',password='$pass', email='$email' where username='$_SESSION[username]'";
    $arr=mysqli_query($con,$q);
    if($q){
        header("location:../login.php");
    }
    mysqli_close($con);

?>