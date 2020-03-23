<!doctype html>
<html>
<head>
<title> Add Data </title>
</head>
<body>
<?php
include_once("connection.php");
$id=mysqli_real_escape_string($mysqli, $_POST['id']);
$date=mysqli_real_escape_string($mysqli, $_POST['date']);
$time=mysqli_real_escape_string($mysqli, $_POST['time']);
$rmc_id=mysqli_real_escape_string($mysqli, $_POST['rmc_id']);
$amtofwater=mysqli_real_escape_string($mysqli, $_POST['amtofwater']);
$result=mysqli_query($mysqli,"insert into rmc_pipenw values('$id','$date','$time','$rmc_id','$amtofwater');");
?>
</body>
</html>
