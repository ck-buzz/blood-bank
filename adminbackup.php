<?php
include("conn.php");
error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin : Unregistered Details</title>
  </head>
  <body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><p class="h3 text-danger"><strong>Blood Bank <span class="text-light">Administrator</span></strong></p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="adminhome.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registered.php">Registers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admininsert.php">Register a Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="request.php">Requests</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="stock.php">Blood Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admindisplay.php">Donor Details</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Unregistered Details<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="adminlog.php">Logs</a>
      </li>
    </ul>
    <span class="navbar-text">
     <a href="index.php?adminlogout='1'"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="adminlogout">Admin Logout</button></a>
    </span>
  </div>
</nav>

<div class="container">
<style type="text/css">
	td{
		padding: 10px;
}	  
body{
background: url("7.jpg") no-repeat center center fixed; 
background-size: cover;
}
table{
  background: url("77.jpg") no-repeat center center fixed; 
background-size: cover;
}
.btn-md{
  border: none;
  outline: none;
}
  
</style>



<?php
$query = "SELECT * FROM BACKUP";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if ($total != 0) {
    ?>
  <h1 class="display-4">Unregistered Details : </h1><br>
 <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
<tbody>
<?php

	while ($result = mysqli_fetch_assoc($data))
	 {
        echo "<tr>  
<td>".$result['id']."</td>
<td>".$result['name']."</td>
<td>".$result['phone']."</td>
<td>".$result['email']."</td>
<td>".$result['age']."</td>
<td>".$result['gender']."</td>
<td>".$result['bgroup']."</td>
<td>".$result['address']."</td>
<td><a href ='backupdetails.php?id=$result[id]'>Open</td>
</tr>";
	}
}
else{

 echo "
      <br> 
      <div class='form-group'>
      <div class='alert alert-danger' role='alert'> 
      <h2>Empty</h2>
      <strong>No Records Found.</strong>
      </div>
      </div>";
}
?>
<table>
	<script type="text/javascript">
		function checkdelete()
		{
			return confirm('Are you sure you want to delete this Data?');
		}
	</script>
</table>

<a href = 'adminhome.php'>
<button type="button" class="btn btn-primary btn-md btn-block"> Back</button>
</a>

</table>





</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>




<!--<td>
<a href ='update.php?id=$result[id] &
name=$result[name] &
phone=$result[phone] &
email=$result[email] &
age=$result[age] &
gender=$result[gender] &
broup=$result[bgroup] &
address=$result[address]'>Edit</a></td>
<td><a href ='delete.php?id=$result[id]' onClick='return checkdelete() '>Delete</a></td>



<backup for display for admin display
[[Varun varma dmbs]]

  -->