<?php
  $size=sizeof($_POST);
  $records=$size/4;
  $con=mysqli_connect("localhost","root","Sk@007007");
  $sel=mysqli_select_db($con,"bms");
  for($i=1;$i<=$records;$i++){
    $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];

  }

  for($i=1;$i<=$records;$i++){
   $q="update book set title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid=$bookid[$i]";
   mysqli_query($con,$q);
  }
  mysqli_close($con);
?>
<DOCTYPE html>
    <html>
        <body>
        <h1>BOOK RECORD MANAGEMENT</h1>
        <div>
        <h4><?php
            echo "Record Updated"
        ?></h4><p>
Go back to home page<a href="/BookManagement/login/Admin/adminhome.php"> click here</a></p>
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
        color:bisque;
    }
    a:hover{
        text-shadow:1px 1px 2px yellow;
    }
</style>
        </body>
    </html>