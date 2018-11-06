<?php
require_once 'php/dbClass.php'; //подключаем файл с классом подключения к БД
$connect = new DBConnection(); //создаём экземпляр класса подключения к БД
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<nav class="nav justify-content-start nav-tabs">
  			<a class="nav-link" href="repertoire.php">Repertoire</a>
  			<a class="nav-link" href="film.php">Film</a>
  			<a class="nav-link  active" href="session.php">Session</a>
  			<a class="nav-link" href="login.php">Login</a>
		</nav>
	</div>
	<div class="container">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">id_session</th>
					<th scope="col">film_name</th>
					<th scope="col">film_id</th>
					<th scope="col">start_session</th>
					<th scope="col">end_session</th>
					<th scope="col">action</th>
				</tr>
			</thead>
			<tbody>
				<?php
                  $query = "SELECT * FROM sessions"; //записываем запрос на выборку данных
                  $queryResult = $connect->makeUnpreparedQuery($query); //выполняем запрос записываем ответ MySQL в $queryResult
                  $data = $connect->fetch($queryResult); //данные полученные из MySQL преабоазовываем в ассоциативный массив
                  for($i = 0, $count = sizeof($data); $i < $count; $i++) // выводим данные в виде строк HTML-таблицы 
                  {
                  	echo "
                  	<tr>
			      		<td scope='row'><input class='form-control' name='id_session' disabled value='{$data[$i]['id_session']}'></td>
			      		<td><input class='form-control' name='film_name' disabled type='text' value='{$data[$i]['film_name']}'></td>
			      		<td><input class='form-control' name='film_id' disabled type='text' value='{$data[$i]['film_id']}'></td>
			      		<td><input class='form-control' name='start_session' disabled type='text' value='{$data[$i]['start_session']}'></td>
			      		<td><input class='form-control' name='end_session' disabled type='text' value='{$data[$i]['end_session']}'></td>
			      		<td>
			      		<div class='action'>
							<i class='fa fa-pencil' aria-hidden='true'></i>
							<i class='fa fa-trash' aria-hidden='true'></i>
						</div>
						<div class='pencil'>
							<i class='fa fa-check' data-table='sessions' aria-hidden='true'></i>
							<i class='fa fa-times' aria-hidden='true'></i>
						</div>
					</td>
			    	</tr>
                  	";                  
                  }
                 ?>
			</tbody>
		</table>
		<div class="row"> 
			<div class="col-3">
				<button class="btn btn-primary col-12">Add</button>
			</div>
			<div class="hide col-6">
				<button class="btn btn-secondary col-5">Cancel</button>
				<button class="btn btn-success col-5">Save</button>
			</div>
		</div>
	</div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/clickIcon.js"></script>
<script src="js/newRow.js"></script>
</html>