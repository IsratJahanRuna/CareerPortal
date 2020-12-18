<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta charset="UTF-8">
	<title>Login Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<body>
	<section class="container-fluid bg">
		<section class="row justify-content-center">
			<section class="col-12 col-sm-6 col-md-3">
	<?php
	if(isset($_REQUEST['DONE_SIGNUP']))
  {
  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
  echo  $_REQUEST["DONE_SIGNUP"];
  }
	?>
				<form class="form-container" action="savedatacore.php" method="POST">
					<div class="regtitle"><u><b>Registration Form</b></u></div>
  <div class="mb-3">
    <label for="exampleInputFName" class="form-label">First Name</label>
    <input type="text" class="form-control" name= "fname" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputLName" class="form-label">Last Name</label>
    <input type="text" class="form-control" name= "lname" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name= "email" id="exampleInputEmail1">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name= "password" required>
  </div>
  <button type="submit" class="btn btn-primary" style=" width:300px; background:#FF5500;">Submit</button>
                </form>
            </section>
        </section>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
