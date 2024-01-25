<?php session_start();
   if(!isset($_SESSION["auser"])){
    header("location:http://localhost/BookManagement/login/Admin/admin.php");
   }
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Adminhome.css">
        
    </head>
    <body>
        <div id="d">
        <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
         <h1>LIBRARY MANAGEMENT SYSTEM</h1>
        </div>


        <div id="d2">
            <h2>!Hello <?php echo $_SESSION["auser"]?>.</h2>
            <div id="operation">
                 <a href="/BookManagement/insert/insertform.php">Insert book</a>
                 <a href="/BookManagement/view/view.php">view book</a>
                 <a href="/BookManagement/delete/deleteform.php">delete book</a>
                 <a href="/BookManagement/update/updateform.php">update book</a>
  </div>
       </div>
       
      
       <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="adminprofile.php">Profile</a><br>
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