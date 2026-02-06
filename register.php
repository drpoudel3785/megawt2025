<?php
if(isset($_POST['submit'])){
    //capturing the users data
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    //connecting to the database
    include('connection.php');
    //writing the sql query
    $sql ="INSERT INTO users(`username`, `password` ,`email`) VALUES('$name', '$pass', '$email')";
    //executing the query
    $qry=mysqli_query($conn, $sql) or die(mysqli_error());
    if($qry){
        //redirecting to the dispaly page
        header("Location: displayallusers.php");
        //echo "Data Inserted Successfully";
    }
    else{
        echo "Unable to Register User";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <form method="post" name="userregistration" action="" enctype="multipart/form-data">
        Username <input type="text" name="username" required><br>
        passowrd <input type="password" name="password" required><br>
        email <input type="email" name="email" required><br>
        <input type="checkbox" name="iagree"  value="iagree" ><br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>