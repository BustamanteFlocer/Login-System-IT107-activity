<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body{
        text-align: center;
    }
    </style>
</head>
<body>

    <h1>Welcome <?php echo $_SESSION['Username']; ?></h1>


    <h2> You are an admin, you are granted all privileges </h2>
    <h3>Queries In The Database You Can Do: </h3>
    <h4> SELECT, INSERT, UPDATE, DELETE, CREATE, ALTER, INDEX, DROP, CREATE TEMPORARY TABLES, SHOW VIEW, <br>
 CREATE ROUTINE, ALTER ROUTINE, EXECUTE, CREATE VIEW, EVENT, TRIGGER, GRANT, LOCK TABLES, REFERENCES</h4>
    Click here to <a href = "logout.php">Logout</a>
    
</body>
</html>