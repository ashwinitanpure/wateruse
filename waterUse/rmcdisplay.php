<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body
{
margin:0;
 background-color:#f7efc1;
 }
 </style>
<title>
PIMPRI CHINCHWAD MUNCIPAL CORPORATION
</title>
<link href="mystyle.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*
 {
    box-sizing: border-box;
}
.header {
    border: 1px solid red;
    padding: 15px;
}
.row::after 
{
    content: "";
    clear: both;
    display: table;

}
[class*="col-"] 
{
    float: left;
    
    border: 0px solid red;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
</style>
</head>
<body>
<div>

	<div class ="row">
			<div class=" col-2 " style="height:90px;">
			<img src= "logo.jpg"  height="100%" width="100%" align="center"/>
			</div>
	<div class="col-8">
	<h1 class="center">PIMPRI CHINCHWAD MUNCIPAL CORPORATION</h1>
	<marquee><b>Welcome</b></marquee>
	</div>

		<div class=" col-2" style="height:90px;">
		<img src= "logo1.jpg"  height="100%" width="100%" align="left"/>
		</div>
	 </div>

<div class ="row">
<br><br><br><br><br>
</div>
</body>
</html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.button {
  background-color:#4CAF50; /* #292e2a  #4CAF50 Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 8px 7px;
  cursor: pointer;
}
.button1 {border-radius: 12px;}
.button2 {border-radius: 12px;}
.button3 {border-radius: 12px;}
.button4 {border-radius: 12px;}
</style>
</head>
<body  class="background">
<center>
<table border="1">
<tr>
<th>RMCID</th>
<th>DATE</th>
<th>TIME</th>
<th>ID</th>
<th>STPNAME</th>
<th>AMT_USE</th>
<th>TOTAL WATER REMAINS IN STP</th>
</tr>
<?php
include_once('connection.php');
$result=mysqli_query($mysqli,"select * from rmc_pipenw AS r inner join stp AS s on  r.id= s.stpid;" );
while($res=mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $res['rmcid']. "</td>";
echo "<td>" . $res['date']. "</td>";
 echo "<td>" . $res['time']. "</td>";
echo "<td>" . $res['stpid']. "</td>";
echo "<td>" . $res['stpname']. "</td>";
echo "<td>" . $res['amt_use']. "</td>";
echo "<td>" . $res['amt_water']. "</td>";
echo "</tr>";
}
?>
</table>
</center>
</body>
</html>
