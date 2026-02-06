<?php
//capturing the data form the url
$action=$_GET['action'];
$id=$_GET['id'];

if(isset($_POST['submit'])){
    $uid=$_POST['uid'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    include('connection.php');
    $sql="UPDATE users SET username='$user', password='$pass', email='$email' WHERE id=$uid";
    $qry=mysqli_query($conn, $sql) or die(mysqli_error());
    if($qry){
        header("Location: displayallusers.php");
    }
    else {
        echo "Something wrong";
    }
}
include('connection.php');
switch($action){
    case 'edit':
        { 
            $sql = "SELECT * FROM users WHERE id=$id";
            $qry = mysqli_query($conn, $sql) or die(mysqli_error());
            while($row=mysqli_fetch_array($qry))
                {
                    $uid=$row['id'];
                    $uname=$row['username'];
                    $pass=$row['password'];
                    $email=$row['email'];
                    echo "<form method=post action=''>";
                        echo "<input type=text id=uid name=uid value=$uid readonly><br>";
                        echo "<input type=text id=user name=user value=$uname ><br>";
                        echo "<input type=text id=pass name=pass value=$pass ><br>";
                        echo "<input type=email id=email name=email value=$email ><br>";
                        echo "<input type=submit name=submit value=update>";

                    echo "</form>";
                }
            break;
        }
        case 'delete':
            {
                $sql ="DELETE FROM users WHERE id=$id";
                $qry=mysqli_query($conn, $sql) or die(mysqli_error());
                header("Location: displayallusers.php");
                break;
            }
            default:{
                echo "you are are now allowd";
                break;

            }

    
}
?>