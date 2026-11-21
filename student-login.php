<?php

session_start();

include 'db.php';

if(isset($_POST['login']))
{

$user=$_POST['username'];

$pass=$_POST['password'];

$q=mysqli_query(
$conn,
"SELECT * FROM students
WHERE username='$user'
AND password='$pass'"
);

if(mysqli_num_rows($q)>0)
{
$data=mysqli_fetch_assoc($q);

$_SESSION['student_id']=$data['id'];

header("location:student-dashboard.php");
}

}
?>

<form method="post">

<input type="text"
name="username"
placeholder="Username">

<br><br>

<input type="password"
name="password"
placeholder="Password">

<br><br>

<button name="login">
Login
</button>

</form>
