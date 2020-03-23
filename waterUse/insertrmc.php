<!doctype html>
<html>
<head>
<title> Add Data </title>
</head>
<body>
<?php
include_once("connection.php");
$rmcid=mysqli_real_escape_string($mysqli, $_POST['id']);
$date=mysqli_real_escape_string($mysqli, $_POST['date']);
$time=mysqli_real_escape_string($mysqli, $_POST['time']);
$id=mysqli_real_escape_string($mysqli, $_POST['stp_id']);
$amt_use=mysqli_real_escape_string($mysqli, $_POST['amt_use']);

$query = "insert into rmc_pipenw values('$rmcid','$date','$time','$id','$amt_use')";
echo $query;

$result=mysqli_query($mysqli, $query);
?>

</body>
</html>
