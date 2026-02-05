<?php
session_start();
if(!isset($_SESSION['isLogIn'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUccess Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username'];?> </h1>
    <a href="logout.php">Logout</a>
    
</body>
</html>