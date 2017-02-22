<html>
	<head>
	 	<title>
	 		Lista składników
	 	</title>
	 	<meta http-equiv="Content-Type" content="text/html" charset=UTF-8">
	 	<script src="javascripts/myJS.js" type="text/javascript"></script>
 	</head>
 	<body>
 		<h1>
			Składniki z bazy danych
		</h1>
		<hr>
			<?php
				require('db.php');

				$dBase = new dBase;
				$dBase->connectServer('localhost:3306', 'root', '');
				$dBase->selectDbase('menu');

				$dBase->selectRecord('SELECT ingredient_name FROM ingredient_names');
				// $dBase->insertRecord('INSERT INTO meals VALUES (meal_name, user_id)');


			?>
	</body>
</html>