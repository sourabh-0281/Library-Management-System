<!DOCTYPE html>
<html>
    <head>
        <title>Insertion form</title>
    </head>
    <body>
    <div id="d">
            <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <h1> LIBRARY MANAGEMENT SYSTEM</h1>
            </div>
        <div id="d1">

       
        <form action="insertion.php" method="post">
            <table>
                <tr>
                    <th>Title:</th>
                    <td><input type="text" name="title" required/></td>
                </tr>
                <tr>
                    <th>Price:</th>
                    <td><input type="text" name="price" required/></td>
                </tr>
                <tr>
                    <th>Author:</th>
                    <td><input type="text" name="author" required/></td>
                </tr>
                <tr>
                    <th rowspan="2"><input style="margin-left: 200px; width: 90px; height: 30px;" type="submit" value="Insert"/></th>
                </tr>
            </table>
        </form>
        </div>
          
       <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="../login/Admin/adminprofile.php">Profile</a><br>
              <a href="../login/Admin/Adminhome.php">Back</a><br>
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
    margin-left:350px;
    margin-right: 0px;
    margin-top: 0px;
    display: inline-block;
    color: bisque;
    padding-bottom: 40px;
    text-align: center;
    text-shadow: 1px 1px 10px wheat;
}
        body{
    margin: 0;
    padding: 0;
    background-image: url("/BookManagement/login/Admin/library.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    }
    #d1{
        width:800px;
        height:400px;
        background-color:rgb(0,0,0,0.7);
        margin-left:220px;
        margin-top:90px;
        box-shadow:1px 1px 20px black;
        border-radius:10px;
    }
    h1{
        color:white;
        text-align:center;
        padding-top:20px;
        text-shadow: 1px 1px 20px whitesmoke;
    }
    table{
        margin-left:100px;
        padding-top: 100px;
        padding-bottom: 20px;
    }
    input{ 
        background-color:rgba(175, 164, 164, 0.5);
        color:whitesmoke ;
        height: 19px;
        font-size: 16px;
    }
    input:hover{
        box-shadow: 1px 1px 15px white;
    }
    th{
        color: antiquewhite;
        font-size: 21px;
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
