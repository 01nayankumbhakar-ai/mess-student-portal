<?php

include 'db.php';

if(isset($_POST['submit']))
{

$student=$_POST['student'];

$amount=$_POST['amount'];

$month=$_POST['month'];

$date=date('Y-m-d');

mysqli_query($conn,"
INSERT INTO payments
(
student_id,
amount,
payment_date,
month_name
)
VALUES
(
'$student',
'$amount',
'$date',
'$month'
)
");

echo "Payment Saved";
}
?>

<form method="post">

Student ID

<input type="number"
name="student">

<br><br>

Amount

<input type="number"
name="amount">

<br><br>

Month

<input type="text"
name="month">

<br><br>

<button name="submit">
Save Payment
</button>

</form>
