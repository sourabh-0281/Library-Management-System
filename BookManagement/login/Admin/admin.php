<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <div>
        <form action="adminvalidate.php" method="post">
            <h2>Admin Login</h2>
            <pre>Username:     <input type="text" name="auser" ></pre>
            <pre>Password:     <input type="password" name="apassword"></pre>
            <pre id="btn"><input type="submit" value="Login" id="create"></pre>
        </form>
        <a style="color:white;text-decoration:none;margin-top:10px;"href="../login.php">Back to Login</a>
    </div>
</body>
</html>