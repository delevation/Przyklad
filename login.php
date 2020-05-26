<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css" >

</head>
<body>

<div class="container">
<h2>login</h2>
<form class="form" action="acceso.php" method="POST">
	<div class="form-group">
	Usuario:<br>
	<input type="text" name="usuario" class="form-control">
	</div>
	<div class="form-group">
	Contraseña:<br>
	<input type="password" name="password" class="form-control">
    </div>
    <div class="form-group">
	<input type="submit" class="btn btn-success">
  </div>

</form>

</div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>