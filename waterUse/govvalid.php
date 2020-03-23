
<?php
include_once('connection.php');
$username= mysqli_real_escape_string($mysqli, $_POST['username']);
$password= mysqli_real_escape_string($mysqli, $_POST['password']);

$result=mysqli_query($mysqli,"select password from government where username='$username'");
while($res= mysqli_fetch_array($result))
{
$aa=$res['password'];
if($aa==$password)
{
header("Location:govhome.html");
}
else
{
 echo"Invalid Username Or Password....";
}
}
?>
