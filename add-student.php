<?php
include 'db.php';

if(isset($_POST['save']))
{

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$room=$_POST['room'];
$rent=$_POST['rent'];

$username=$_POST['username'];
$password=$_POST['password'];

mysqli_query($conn,"
INSERT INTO students
(
name,
mobile,
room_no,
rent,
username,
password
)
VALUES
(
'$name',
'$mobile',
'$room',
'$rent',
'$username',
'$password'
)
");

echo "Student Added";

}
?>

<form method="post">

<input type="text" name="name" placeholder="Name"><br><br>

<input type="text" name="mobile" placeholder="Mobile"><br><br>

<input type="text" name="room" placeholder="Room"><br><br>

<input type="number" name="rent" placeholder="Rent"><br><br>

<input type="text" name="username" placeholder="Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="save">
Save
</button>

</form>
