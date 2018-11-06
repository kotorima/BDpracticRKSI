<?php
require_once 'php/dbClass.php'; //подключаем файл с классом подключения к БД
$connect = new DBConnection(); //создаём экземпляр класса подключения к БД
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<nav class="nav justify-content-start nav-tabs">
  			<a class="nav-link" href="repertoire.php">Repertoire</a>
  			<a class="nav-link" href="film.php">Film</a>
  			<a class="nav-link" href="session.php">Session</a>
  			<a class="nav-link  active" href="login.php">Login</a>
		</nav>
	</div>
	<div class="container">
		<h2 class="col-5">Enter your data in the fields</h2>
		<form class="form">
			<input type="text" class="form-control col-3" placeholder="Enter your login">
			<input type="password" class="form-control col-3" placeholder="Enter your password">
			<input type="submit" class="btn btn-primary col-2" value="Login">
		</form>
	</div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</html>