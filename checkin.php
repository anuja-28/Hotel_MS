<?php
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check in</title>
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

<div class="container mt-5"> 
<form  name="HOTEL MANAGEMENT" method="post" action="addUser.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Username</label>
    <input required="required" class="form-control" type="text" name="name"  value="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Email</label>
    <input required="required" class="form-control" type="email" name="email" value="" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter ID-Proof</label>
    <input required="required" class="form-control" type="text" name="idproof" value="" placeholder="Enter ID-Proof">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Address</label>
    <input required="required" class="form-control" type="text" name="address" value="" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Contact</label>
    <input required="required" class="form-control" type="number" name="contact" value="" placeholder="Enter Contact">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Checkin Date</label>
    <input required="required" class="form-control" type="date" name="date" value="" placeholder="Select Date">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Checkout Date</label>
    <input required="required" class="form-control" type="date" name="date" value="" placeholder="Select Date">
  </div>
  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>