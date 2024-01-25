<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library  Management System</title>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
    <div id="d">
        <h1>LIBRARY MANAGEMENT SYSTEM</h1>
        <p>This is simple Library Management System which is use to maintain the records of the Books.
             This Library Management System has been made by using HTML,CSS ,JAVASCRIPT,PHP,MYSQL.
             Here User can create account and then Login and pick which book he wants to read.If the User is Admin
             he can do Admin Login and check records of the Book weather he want to SELECT,UPDATE,DELETE or INSERT 
             a Record 
        </p>
    </div>

    <div id="d1">
        <div class="divblock">
            <h4>User</h4>        
            
        </div>
        <a id="a1" href="/BookManagement/login/login.php">User</a>
        <a id="a3" href="/BookManagement/login/newlogin/Newuser.php">Create User</a>
    </div>

    <div id="d2">
        <div class="divblock">
            <h4>Admin</h4>
        </div>
        <a id="a2" href="/BookManagement/login/Admin/admin.php">Admin</a>
    </div>
</body>
</html>