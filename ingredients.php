<html>
	<head>
	 	<title>
	 		Lista składników
	 	</title>
	 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	 	<script src="javascripts/myJS.js" type="text/javascript"></script>
 	</head>
 	<body>
 		<h1>
			Składniki z bazy danych
		</h1>
		<hr>
			<?php
				if (!$link = mysql_connect('localhost:3306', 'root', '')) 
				{
 					die('Nie połączono : ' . mysql_error());
				}

				if (!mysql_select_db('menu', $link)) 
				{
				    die ('Nie można ustawić foo : ' . mysql_error());
				}

				$sql = 'SELECT ingredient_name FROM ingredients';
				$result = mysql_query($sql, $link);

				if (!$result) 
				{
				    echo "Błąd bazy danych, nie można wykonać zapytania do bazy\n";
				    echo 'Błąd MySQL: ' . mysql_error();
				    exit;
				}

				while ($row = mysql_fetch_assoc($result)) {
					echo $row['ingredient_name'] . '<br>';
				}

				mysql_free_result($result);


			?>
	</body>
</html>