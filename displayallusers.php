<?php
include('connection.php');
//writing the sql query
$sql = "SELECT * FROM users ORDER BY id DESC";
$qry = mysqli_query($conn, $sql) or die(mysqli_error());
//extracting the data
echo "<a href='register.php'>Add User</a>";
echo "<table><tr><th>ID</th><th>Username</th><th>password</th><th>Email</th><th>Actions</th></tr>";
while($row=mysqli_fetch_array($qry))
{
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['password']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td><a href='usermgmet.php?id=".$row['id']."&action=edit'> EDIT</a> | 
                <a href='usermgmet.php?id=".$row['id']."&action=delete'> DELETE</td>";
    echo "</tr>";
}
echo "</table>";
?>