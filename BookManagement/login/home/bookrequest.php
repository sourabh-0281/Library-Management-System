<?php
    session_start();
    
    $size=sizeof($_POST);
    
    $j=1;
    for($i=1;$i<=$size;$i++,$j++){
      $index="brequest".$j;                                           
      if(isset($_POST[$index])){
          $bid[$i]=$_POST[$index]; 
      }
      else{
          $i--;  
       }
    }
    


    $con=mysqli_connect("localhost","root","Sk@007007");
    $sel=mysqli_select_db($con,"bms");
    
    for($k=1;$k<=$size;$k++){    

     $t=mysqli_query($con,"select title from book where bookid=".$bid[$k]);
     $title=mysqli_fetch_array($t);
     $bname[$k]=$title['title'];

     $a=mysqli_query($con,"select author from book where bookid=".$bid[$k]);
     $author=mysqli_fetch_array($a);
     $bauthor[$k]=$author['author'];

     mysqli_query($con,"insert into issuebook (username,bookid,title,author)values('$_SESSION[username]',$bid[$k],'$bname[$k]','$bauthor[$k]')");
    }

     $r=mysqli_query($con,"select * from issuebook where username='$_SESSION[username]'");
     $num=mysqli_num_rows($r);

    
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <div id="d1">
    <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <h1>Library Management System</h1>
</div>

<form action="deleterequest.php" method="post">
    <table id="t1">
        <tr>
            
            <th>Bookid</th>
            <th>Title</th>
            <th>Author</th>
            <th>Issuedate</th>
            <th>Return</th>
        </tr>
        <?php
        for($i=1;$i<=$num;$i++){
            $row=mysqli_fetch_array($r);
        ?>
            <tr>
            <td><?php echo $row['bookid']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['author']?></td>
            <td><?php echo $row['issuedate']?></td>
            <td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i;?>"></td>
            </tr>
        <?php
         }
        ?>
        <tr><td colspan="5"><input id="return" type="submit" value="return"></td></tr>
        </table>
    </form>
        <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="profile.php">Profile</a><br>
              <a href="home.php">Back</a><br>
            <a href="login.php">Logout</a>
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
        #return{
               margin-left: 700px;
                width: 90px;
            
        }
body{
    margin: 0;
    padding: 0;
    background-image: url("https://images.wallpaperscraft.com/image/single/library_books_reading_125466_1920x1080.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    }
    #d1{
            margin-bottom: px;
    }
    h1{
        color:bisque;
        text-align:center;
        padding-top:0px;
        text-shadow: 1px 1px 20px whitesmoke;
        background-color:rgb(0,0,0,0.5);
        box-shadow:1px 1px 20px black;
        margin-top:0px;
        padding-top:10px;
        font-size:37px;}

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
    th{
        font-size:21px;
        background-color: grey;
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
   margin-top: 5px;
   float: left;
}
    </style>
    </body>

</html>