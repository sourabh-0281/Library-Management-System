<?php
    session_start();
    $_SESSION["auser"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link rel="stylesheet" type="text/css" href="adminprofile.css">
</head>
<body>
    <div id="d">
    <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>   
        <h1>LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
        <div id="d2">
            <div id="operation">
                <a href="edit.php">Edit Profile</a><br>
                <a href="addnewadmin.php">Add New Admin</a>
       </div>
        </div>
    </div>


    <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="Adminhome.php">Back</a><br>
            <a href="admin.php">Logout</a>    
           </div>
<script>

           function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script> 

<style>
     .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgba(0, 0,0,10);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color:white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  text-shadow: 1px 1px 20px white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
span{
   color: white;
   padding-left: 15px;
   margin-top: 20px;
   float: left;
 
}
</style>
</body>
</html>