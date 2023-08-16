<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show User</title>
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
<form  method="post" action="showuser.php">
  <div class="form-group">
    <label>Enter ID Proof</label>
    <input required="required" class="form-control" type="text" name="proofToShow" placeholder="Enter ID Proof" value="">
  </div>
  <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
</form>
</body>
</html>