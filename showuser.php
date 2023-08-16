<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-default bg-primary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;">HOTEL</a>
    </div>
    <ul class="nav navbar-nav">
      <li><button class="btn btn-warning"><a href="index.php">Home</a></button></li>
    </ul>
  </div>
</nav>

<?php
include('connect.php');

$id = $_REQUEST['proofToShow'];
$query="select * from info where idproof = '$id'";;
$result = mysqli_query($con,$query);

echo "<h2>User Details</h2><br><table class='table mt-5' border='1'>

<tr>
<th scope='col'>Id</th>
<th scope='col' >Name</th>
<th scope='col' >Email</th>
<th scope='col'>Id proof</th>
<th scope='col'>Address</th>
<th scope='col'>Contact</th>
<th scope='col'>Date</th>
</tr>";
$i=1;
while($row = mysqli_fetch_array($result))
{
echo "<tr scope='row'>";
echo "<td>".$i."</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['idproof'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['contact'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
$i=$i+1;
}
echo "</table>";


?>
    
</body>
</html>