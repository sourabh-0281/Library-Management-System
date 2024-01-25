<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admin</title>
</head>
<body>
<div id="d">
            <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <h1> LIBRARY MANAGEMENT SYSTEM</h1>
            </div>
            <div id="d1">
                <h1 style="color:aliceblue">Create New Admin</h3>
                    <form action="addnewadminvalidate.php" method="post">
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="uname"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="upass"></td>
                            </tr>
                            <tr>
                                <td>Mobile Number:</td>
                                <td><input type="number" required></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><input type="text" required></td>
                            </tr>
<tr><td colspan="2"><input style="width: 100px; text-align: center; background-color:rgba(235, 228, 228, 0.774); margin-left: 100px;height: 30px;" type="submit" value="create"></td></tr>
                        </table>
                    </form>

            </div>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="./adminprofile.php">Profile</a><br>
              <a href="./Adminhome.php">Back</a><br>
            <a href="../login/Admin/admin.php">Logout</a>    
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
         #d{
    margin-top: 0px;
    background-color:rgba(0, 0, 0, 0.5);
    box-shadow: 1px 1px 20px black;
   margin-bottom: 19px;
    height: 55px;
 padding-top:1px ;
 padding-bottom: 25px;
 
}
#d h1{
    margin-left:390px;
    margin-right: 0px;
    margin-top: 20px;
    display: inline-block;
    color: bisque;
   
    text-align: center;
    text-shadow: 1px 1px 10px wheat;
}
        body{
    margin: 0;
    padding: 0;
    background-image: url("library.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    }
    #d1{
        align-content: center;
        margin-left: 350px;
        margin-top: 0px;
        width: 600px;
        height: 500px;
        background-color: rgb(0,0,0,0.7);
        border:1px solid wheat;
        border-radius: 6px;
        box-shadow: 1px 1px 20px black;
    }
    h1{
        text-align: center;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    table{
        margin-left: 100px;
        margin-top: 100px;
    }
    input{
        width: 200px;
        background-color:rgba(175, 164, 164, 0.5);
        margin-left: 20px;
      
    }
    input:hover{
        box-shadow: 1px 1px 15px white;
    }
    td{
        color: antiquewhite;
        font-size: 20px;
    }
    tr{
        line-height: 50px;
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
    </style>
</body>
</html>