<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'IT107_users') or die ('Unable to connect');

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

        .field{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <h2>Please Login</h2>
    <div>
        <form action = "index.php" method = "post">
            <input type = "text" class = "field" name = "Username" placeholder = "Username" required = ""><br/>
            <input type = "password" class = "field" name = "Pass" placeholder = "Password" required = ""><br/>
            <input type = "submit" class = "field" name = "login" value = "Login">
        </form>
    </div>

<?php
    if (isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];
        $Role = $_POST['Role'];
        

    $select = mysqli_query($conn," SELECT * FROM user WHERE Username = '$Username' AND Pass = '$Pass' OR Role ='$Role'");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
        $_SESSION["Role"] =$row['Role'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "index.php" ';
        echo '</script>';
    }
    }

    if(isset($_SESSION["Username"])){
    if(($_SESSION["Role"] =='Admin')){
        header("Location:admin_login.php");
    } else{
        header("Location:average_user_login.php");
    }
    
}


    
?>

</body>
</html>