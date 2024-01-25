<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div>
    <form action="dataentry.php" method="post">
        <h2>New User</h2>
        <pre>Username:     <input type="text" name="nuser"></pre>
        
        <pre>Password:     <input type="password" name="npassword"></pre>
        
        <pre>Email:        <input type="email" required></pre>

        <pre>Phone Number: <input type="number" required></pre>
        <input type="submit" value="Create" id="create">
    </form>
    <a style="color:white;text-decoration:none;margin-top:10px;display:block;"href="../login.php">Back to Login</a>
</div>
</body>
</html>
