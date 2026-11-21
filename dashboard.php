<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("location:admin-login.php");
}
?>

<h1>Admin Dashboard</h1>

<a href="add-student.php">
Add Student
</a>

<br><br>

<a href="students.php">
View Students
</a>

<br><br>

<a href="rent-payment.php">
Rent Payment
</a>

<br><br>

<a href="logout.php">
Logout
</a>
