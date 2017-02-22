<?php
class Dbase
{
	public $link; //identyfikator połączenia MySQL

	public function connectServer($serverName, $user, $password)
	{
		if (!$this->link = mysql_connect('localhost:3306', 'root', '')) 
		{
				die('Nie połączono : ' . mysql_error());
		}
	}

	public function selectDbase($dbName)
	{
		if (!mysql_select_db($dbName, $this->link)) 
		{
		    die ('Nie można ustawić foo : ' . mysql_error());
		}
	}

	public function selectRecord($sql)
	{
		$result = mysql_query($sql, $this->link);
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
	}

	public function insertRecord($sql)
	{
		if (!mysql_query($sql, $this->link)) 
		{
		    echo "Błąd bazy danych, nie można wykonać zapytania do bazy\n";
		    echo 'Błąd MySQL: ' . mysql_error();
		    exit;
		}
	}
}

?>