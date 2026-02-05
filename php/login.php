<?php
//strating the session at very top
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" name="login" action="" enctype="myltipart/form-data">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="submit" value="Login">
    </form>
    
</body>
</html>
<?php
//function defination
//function with argument but no return type
function login($username, $password){
    if($username=="admin" AND $password=='admin123'){
        //registering the users session
        $_SESSION['username']=$username;
        $_SESSION['isLogIn']=true;
        //redirect to the success page
        header("Location: success.php");
    }
    else{
        echo "Login failed";
    }
}
//checking the form is submitted or not
if(isset($_POST['submit'])){
    //retriving the forms data
    $usr=$_POST['user'];
    $pwd=$_POST['pass'];
    //calling the function
    login($usr, $pwd);
}
else{  
}
?>