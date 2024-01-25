<?php


?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
  </head>
  <body>
    <div>
    <h2>Login</h2>
    <form action="validation.php" method="post">
      
        <p class="text">USERNAME</p>
        <input type="text" name="username" id="uname"/>
        <p class="text">PASSWORD</p>
        <input type="password" name="password" id="pass"/><br>
        <input type="submit" value="Login" id="bt"/>
        <br>
        <p id="atag">
       

        <a class="atag" href="Admin/admin.php">Admin Login</a> 
        </p>
</div>
    </form>


  </body>

</html>