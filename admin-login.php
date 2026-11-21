<?php
session_start();

if(isset($_POST['login']))
{
if(
$_POST['username']=="admin"
&&
$_POST['password']=="123456"
)
{
$_SESSION['admin']=true;
header("location:dashboard.php");
}
}
?>

<form method="post">

<input type="text" name="username" placeholder="Username">

<br><br>

<input type="password" name="password" placeholder="Password">

<br><br>

<button name="login">
Login
</button>

</form>
