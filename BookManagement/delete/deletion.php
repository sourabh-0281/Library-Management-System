<?php
  $size=sizeof($_POST);
  $j=1;
  for($i=1;$i<=$size;$i++,$j++){
    $index="d".$j;                                           
    if(isset($_POST[$index])){
        $bid[$i]=$_POST[$index]; //here we have set array bid where passins the values we have checkbox
    }
    else{
        $i--;  //lets say 1 and 3 are checkbox when loop on 2 condition is false then 3 cond. is true so bid will be [1=>1,3=>2] so 2 index will not be set.
     }
  }
  $con=mysqli_connect("localhost","root","Sk@007007");
  $sel=mysqli_select_db($con,"bms");
  for($k=1;$k<=$size;$k++){
   $q="delete from book where bookid=".$bid[$k];
   mysqli_query($con,$q);
  }
  mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head><title>Deletion</title></head>
    <body>
        <h1>Library Management System</h1>
        <div>
        <h4><?php 
            echo $size." Record deleted Succesfully";
            ?>
        </h4><p>
        Go Back To HomePage <a href="/BookManagement/login/Admin/adminhome.php">click here</a></p></div>
        <style>
                body{
    margin: 0;
    padding: 0;
    background-image: url("/BookManagement/login/Admin/library.jpg");
    background-repeat: no-repeat;
    background-size:cover;
    }
    h1{
    margin-left:0px;
    margin-top:0px;
    padding-top:10px;
    color: bisque;
    text-align: center;
    text-shadow: 1px 1px 10px wheat;
    background-color:rgb(0,0,0,0.5);
    box-shadow:1px 1px 20px black;
    width:cover;
    font-size:40px;
}
    div{
        width:800px;
        height:300px;;
       background-color:rgb(0,0,0,0.5);
        margin-left:250px;
        box-shadow:1px 1px 20px black;
    }
    div h4{
        color:white;
        font-size:30px;
       
        padding-left:20px;
        padding-top:10px;
    }
    p{
        padding-left:20px;
        padding-top:10px;
        color:white;
        font-size:20px;
    }
    a{
        color:bisque;
    }
    a:hover{
        text-shadow:1px 1px 2px yellow;
    }
        </style>
    </body>
</html>