<?php
include 'connection.php';
session_start();
if(isset($_POST['login']))
{
    $u_name=$_POST['u_name'];
    $pwd=$_POST['pwd'];
    $data=mysqli_query($con,"SELECT * from login where username='$u_name' and password='$pwd'");
    if(mysqli_num_rows($data)>0)
{
    header("location:home.php");
}
else{
    echo "<script>alert('invalid username or password')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <center>
            <table>
                <tr><td>User Name </td><td><input type="text" name="u_name" value="u_name"></td><br>
                <br>
</tr>
<td>password</td><td><input type="text" name="pwd" value="pwd"></td><br>
<br>
<tr>
<td><button name="login" >submit</button></td></tr>

</table>
</center>
</body>
</html>