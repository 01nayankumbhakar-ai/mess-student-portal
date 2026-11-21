<?php
$conn = mysqli_connect(
"localhost",
"root",
"",
"pg_management"
);

if(!$conn){
die("Database Connection Failed");
}
?>
