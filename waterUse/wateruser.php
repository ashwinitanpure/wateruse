<?php
include_once 'connection.php';

$sql = "SELECT * FROM stp";

$result = mysqli_query($mysqli, $sql);

echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>";
echo "STP ID";
echo "</th>";
echo "<th>";
echo "STP Name";
echo "</th>";
echo "<th>";
echo "Amout Water";
echo "</th>";
echo "</tr>";
echo "</thead>";

if (mysqli_num_rows($result) > 0) {
echo "<tbody>";
    while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<th>";
echo $row["stpid"];
echo "</th>";
echo "<th>";
echo $row["stpname"];
echo "</th>";
echo "<th>";
echo $row["amt_water"];
echo "</th>";
echo "</tr>";

    }
echo "</tbody>";
} else {
    echo "0 results";
}
echo "</table>";


mysqli_close($mysqli);
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
</html>