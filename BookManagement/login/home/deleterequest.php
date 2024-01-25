<?php
   session_start();
   $size1=sizeof($_POST);
   $j=1;
   for($i=1;$i<=$size1;$i++,$j++){
     $index="b".$j;                                           
     if(isset($_POST[$index])){
         $deleteid[$i]=$_POST[$index]; //here we have set array bid where passins the values we have checkbox
     }
     else{
         $i--;  //lets say 1 and 3 are checkbox when loop on 2 condition is false then 3 cond. is true so bid will be [1=>1,3=>2] so 2 index will not be set.
      }
   }
   $con=mysqli_connect("localhost","root","Sk@007007");
   $sel=mysqli_select_db($con,"bms");

   for($k=1;$k<=$size1;$k++){
    $q="delete from issuebook where bookid=".$deleteid[$k];
    $o=mysqli_query($con,$q);
   }
  
   if($o){
    header("location:bookrequest.php");
   }
   mysqli_close($con);
?>