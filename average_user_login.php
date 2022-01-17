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
       <h2> You are an average user, you only have limited privileges in database </h2>
       <h3>Commands in Database You Can Do:</h3>
       <ul>SELECT</ul>
       <ul>INSERT</ul>
       <ul>UPDATE</ul>
       <ul>DELETE</ul>
       
    Click here to <a href = "logout.php">Logout</a>
    
</body>
</html>