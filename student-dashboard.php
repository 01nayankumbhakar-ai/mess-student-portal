<?php

session_start();

include 'db.php';

$id=$_SESSION['student_id'];

$student=mysqli_fetch_assoc(
mysqli_query(
$conn,
"SELECT * FROM students
WHERE id='$id'"
)
);

?>

<h1>
Welcome
<?php echo $student['name']; ?>
</h1>

<h3>
Room No :
<?php echo $student['room_no']; ?>
</h3>

<h3>
Rent :
₹<?php echo $student['rent']; ?>
</h3>

<hr>

<h2>
Payment History
</h2>

<?php

$payments=mysqli_query(
$conn,
"SELECT * FROM payments
WHERE student_id='$id'"
);

while($p=mysqli_fetch_assoc($payments))
{

echo "
Month :
".$p['month_name']."

<br>

Amount :
₹".$p['amount']."

<br>

Date :
".$p['payment_date']."

<hr>
";
}
?>
