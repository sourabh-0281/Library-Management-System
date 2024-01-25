<?php
 $con=mysqli_connect("localhost","root","Sk@007007");
 mysqli_select_db($con,"bms");
 $q="select * from book";
 $arr=mysqli_query($con,$q);
 $num=mysqli_num_rows($arr);
 mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <div id="d">
            <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <h1> LIBRARY MANAGEMENT SYSTEM</h1>
            </div>

        <form action="deletion.php" method="post">
        <table id="t1">
        <tr>
            <th>Book Id</th>
            <th>Tittle</th>
            <th>Price</th>
            <th>Author</th>
            <th>Select to delete</th>
        </tr>
        <?php
         for($i=1;$i<=$num;$i++){
            $row=mysqli_fetch_array($arr);
        ?>
    
            <tr>
            <td><?php echo $row['bookid']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['price']?></td>
            <td><?php echo $row['author']?></td>
            <td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="d<?php echo $i;?>"></td>
            </tr>
        <?php
         }
        ?>
        <tr><td colspan="5"><input style="margin-left:320px;width:80px;" type="submit" value="Delete"></td></tr>
        </table>
        </form>

        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="../login/Admin/adminprofile.php">Profile</a><br>
              <a href="../login/Admin/Adminhome.php">Back</a><br>
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
    body{
    margin: 0;
    padding: 0;
    background-image: url("/BookManagement/login/Admin/library.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    }
    
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
    margin-top: 20px;
    display: inline-block;
    color: bisque;
   
    text-align: center;
    text-shadow: 1px 1px 10px wheat;
}
    table{
        text-align:left;
        margin-left:220px;
        margin-top:50px;
        width:800px;    
        height:500px;
        background-color:rgb(0,0,0,0.7);
        box-shadow:1px 1px 20px black;
    }  
    tr,td{
        color:white;
        font-size:20px;
    }
    tr:hover{
        background-color: grey;
    }
    th{
        font-size:21px;
        }
        td{
            font-size: 20px;
        }
    input{
        font-size:15px;

        width:20px;
        height:25px;
    }
    input:hover{
        box-shadow:1px 1px 20px white;
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