<?php
include 'db.php';

$result=mysqli_query(
$conn,
"SELECT * FROM students"
);

while($row=mysqli_fetch_assoc($result))
{
echo "

ID : ".$row['id']."<br>

Name : ".$row['name']."<br>

Room : ".$row['room_no']."<br>

Rent : ".$row['rent']."

<hr>

";
}
?>
