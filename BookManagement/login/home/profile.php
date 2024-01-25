<?php
  session_start();
  $con=mysqli_connect("localhost","root","Sk@007007");
  mysqli_select_db($con,"login");
  $q="select * from user";
  $arr=mysqli_query($con,$q);
  $num=mysqli_num_rows($arr);
  mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<body>
<div id="d1">
            <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <h1> Library Management System</h1>
            </div>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="home.php">Back</a><br>
              <a href="../login.php">Logout</a>
           </div>

          <div id="d2">
            <h2>Hello <?php echo $_SESSION["username"];?></h2>

            <form action="edit.php" method="post">
              <table>
                <tr>
                  <th>Name</th>
                  <th>Password</th>
                  <th>Email</th>
                </tr>
              <?php
              for($i=0;$i<$num;$i++){
              $row=mysqli_fetch_array($arr);
              ?>  
              <tr>
                  <td><input type="text" value="<?php echo $row['username']?>" name="user" required/></td>
                  <td><input type="password" value="<?php echo $row['password']?>" name="password" required/><input id="c1" type="checkbox" onclick="seepassword();"></td>
                  <td><input type="text" value="<?php echo $row['email']?>" name="email" required/></td>
                </tr>
              <?php
               }
               ?>
               
              </table>
              <input type="submit" value="edit" id="edit">
            </form>
          </div>
   <script>
function seepassword(){
  var x=document.getElementsByName('password')[0];
  if(x.type==="password"){
    x.type="text";
  }else{
    x.type="password";
  }
function validate(){
  var x=document.getElementsByName('password')[0];
}
}
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script> 
   <style>
    #c1{
      margin-left: 0px;
      width: 20px;
    }
    #edit{
      margin-left: 300px;
      margin-top: 90px;
      width: 95px;
    }
    #edit:hover{
      box-shadow: 1px 1px 20px white;
    }
      table{
        margin-top: 50px;
        width:700px;
      }
    th{
      font-size: 20px;
      color:white;

    }
    input{
      width: 190px;
      background-color:white;
    }
    td{
      margin-right: 0px;
    }
        body{
            margin: 0;
            padding: 0;
            background-image: url("https://images.wallpaperscraft.com/image/single/library_books_reading_125466_1920x1080.jpg");
            background-size: cover;
        }

        #d1{
            margin-top:0px;
            background-color: rgba(0, 0,0,0.5);
            height: 80px;
            box-shadow: 1px 1px 20px black;
        }
        #d1 h1{
                color:bisque;
              float: right;
                margin-right: 400px;
                padding-bottom:20px;
                font-size: 34px;
                text-shadow: 1px 1px 20px bisque;
                display: inline;
                
        }
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

  #d2{
    width: 700px;
    height: 300px;
    background-color: rgba(0, 0,0,0.6);
    margin-left: 280px;
    margin-top: 100px;
    border-radius: 10px;
    box-shadow: 1px 1px 20px black;
  }
  #d2 h2{
    text-shadow: 1px 1px 20px white;
    color:white;
    margin-top: 0px;
    padding-top: 20px;
    padding-left: 15px;
  }
  
   </style>
</body>

</html>