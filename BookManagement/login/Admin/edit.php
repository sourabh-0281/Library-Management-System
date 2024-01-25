<?php
     session_start();

    $con=mysqli_connect("localhost","root","Sk@007007");
    mysqli_select_db($con,'login');
    $q= "select * from admin";
    $arr=mysqli_query($con,$q);
    $num=mysqli_num_rows($arr);
    mysqli_close($con);

?>

<html>
    <head>
        <style>

body{
    margin: 0;
    padding: 0;
    background-image: url("library.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    
}

#d2{
    width: 700px;
    height: 400px;
    float:right; 
     position:absolute;
       margin-left:280px;
       margin-top: 70px;
       background-color:rgba(0, 0, 0, 0.7);
       box-shadow: 1px 1px 20px black;
        border-radius: 10px;
 
}

#d{
    margin-top: 0px;
    background-color:rgba(0, 0, 0, 0.5);
    box-shadow: 1px 1px 20px black;
   margin-bottom: 2px;
    height: 55px;
 padding-top:1px ;
 padding-bottom: 25px;
 
}
#d h1{
    margin-left:350px;
    margin-right: 0px;
    display: inline-block;
    color: bisque;
    text-align: center;
    text-shadow: 1px 1px 10px wheat;
}

#d label{
    margin-left: 230px;
}
select{
    border: none;
    background-color: transparent;
}
#d #d0{
    display: inline;
    margin-top: 0px;
    text-align: right;
}
#operation{

    position: relative;
    margin-top: 100px;
    margin-left: 20px;
}
#operation a{

    border:1px dotted black;
    border-radius: 3px;
}
#d2 h2{
    color: aliceblue;
    font-family: Arial, Helvetica, sans-serif;
    margin-left: 20px;
    margin-top: 30px;
}
table{
    width:500px;
    margin-left: 120px;
}
td{
    color: white;
    font-size: 21px;
    font-weight: bold;
}
input{
    width:130px;
    height: 30px;
}
input:hover{
    box-shadow: 1px 1px 20px white;
}
#update{
    margin-left: 140px;
    margin-top: 30px;
    width:100px;
    background-color:rgb(251 244 244 / 80%);
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
#c1{
      width: 20px;
     height: 15px;  
    
    }
        </style>
    </head>
    <body>
    <div id="d">
    <span style="position:relative;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <h1>LIBRARY MANAGEMENT SYSTEM</h1>
        </div>

        <div id="d2">
            <h2 style="text-shadow:1px 1px 20px white">Profile Edit</h2>
           
            <div id="operation">
                <form action="editupdate.php" method="post">
                <table>
                    <tr><td>Name:</td><td>Password:</td></tr>
                <?php
                 for($i=1;$i<=$num;$i++){
                 $row=mysqli_fetch_array($arr);
                ?>    
                <tr>
                 <td><input type="text" value="<?php echo $row['name']?>" name="ename" required/></td>
                  <td><input type="password" value="<?php echo $row['password']?>" name="epass" required/><input id="c1" type="checkbox" onclick="seepassword();"></td>
                </tr>
                  <?php }?>
                  <tr><td colspan="2"><input type="submit" value="Update" id="update"></td></tr>
                </table>
                </form>
                
            </div>
        </div>
    </div>
    <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <a href="./adminprofile.php">Profile</a><br>
              <a href="./Adminhome.php">Back</a><br>
            <a href="./admin.php">Logout</a>    
           </div>


<script>
    function seepassword(){
  var x=document.getElementsByName('epass')[0];
  if(x.type==="password"){
    x.type="text";
  }else{
    x.type="password";
  }

}
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script> 
    </body>
</html>