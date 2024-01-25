<?php session_start();
   if(!isset($_SESSION["username"])){
    header("location:http://localhost/login/login.php");
   }
?><?php
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
            <div id="d1">
            <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            <h1> Library Management System</h1>
         
            </div>
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="profile.php">Profile Edit</a><br>
              <a href="bookrequest.php">Book Request</a><br>
              <a href="../login.php">Logout</a>
            


           </div>

           <form action="bookrequest.php" method="post">
         <table id="t1">
        <tr>
            <th>Book Id</th>
            <th>Tittle</th>
            <th>Price</th>
            <th>Author</th>
            <th>Request</th>
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
            <td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="brequest<?php echo $i;?>"></td>
            </tr>
        <?php
         }
        ?>
       
            </table>
            <input id="request" type="submit" value="Request">
           </form>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

        </body>
     <style>
        #request{
            width:90px;
            margin-left: 210px;
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

      {
             font-family: "Lato", sans-serif;
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

table{
        text-align:left;
        margin-left:220px;
        margin-top:50px;
        width:800px;    
        height:400px;
        background-color:rgb(0,0,0,0.7);
        box-shadow:1px 1px 20px black;
    }  
    tr,td{
        color:white;
        font-size:20px;
       
        margin-bottom:20px;
    }
    tr:hover{
        background-color: gray;
        
    }
    th{
        font-size:21px;
        
        }
    input{
        font-size:15px;

        width:20px;
        height:25px;
    }
    input:hover{
        box-shadow:1px 1px 20px white;
    }
</style>   
</body>
</html> 

