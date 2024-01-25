<?php
   
  $title=$_POST["title"];
  $price=$_POST["price"];
  $author=$_POST["author"];
  $con=mysqli_connect("localhost","root","Sk@007007");

  $sel=mysqli_select_db($con,"bms");

  $q="INSERT INTO book (title,price,author) VALUES('$title',$price,'$author')";
  $status=mysqli_query($con,$q);

  mysqli_close($con);
?>

<!DOCTYPE html>
<html>
    <head><title>Insertion</title></head>
    <body>
        <h1>Library Management System</h1>
        <div>
        <h4><?php 
        if($status==1){
            echo"Record Inserted Succesfully";}
        else {
             echo "Insertion failed";}
             ?>
        </h4>
        <p>
        Do you want to insert another form<a href="insertform.php">click here</a><br>
        Go back to home page<a href="/BookManagement/login/Admin/adminhome.php">click here</a></p>
        </div>
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
        color;bisque;
    }
    a:hover{
        text-shadow:1px 1px 2px yellow;
    }

        </style>
    </body> 
</html>