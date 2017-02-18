<html>
	<head>
	 	<title>
	 		Lista zakupów
	 	</title>
 	</head>
 	<body>
 		<h1>
			Lista zakupów
		</h1>
		<hr>
 		<ol>
			<?php 
				if(isset($_POST['nalesniki']))
				{
					$nalesniki = $_POST['nalesniki'];
					if(!empty($nalesniki))
					{
						$N = count($nalesniki);
						for($i=0; $i < $N; $i++)
						{
							echo("<li>" . $nalesniki[$i] . "</li>");
						}
					}
				}

				if(isset($_POST['risotto']))
				{
					$risotto = $_POST['risotto'];
					if(!empty($risotto))
					{
						$N = count($risotto);
						for($i=0; $i < $N; $i++)
						{
							echo("<li>" . $risotto[$i] . "</li>");
						}
					}
				}

				if(isset($_POST['wolowinawsosiesojowym']))
				{
					$wolowinawsosiesojowym = $_POST['wolowinawsosiesojowym'];
					if(!empty($wolowinawsosiesojowym))
					{
						$N = count($wolowinawsosiesojowym);
						for($i=0; $i < $N; $i++)
						{
							echo("<li>" . $wolowinawsosiesojowym[$i] . "</li>");
						}
					}
				}

				if(isset($_POST['chilliconcarne']))
				{
					$chilliconcarne = $_POST['chilliconcarne'];
					if(!empty($chilliconcarne))
					{
						$N = count($chilliconcarne);
						for($i=0; $i < $N; $i++)
						{
							echo("<li>" . $chilliconcarne[$i] . "</li>");
						}
					}
				}

				if(isset($_POST['kurczakwsosiemusztardowomiodowym']))
				{
					$kurczakwsosiemusztardowomiodowym = $_POST['kurczakwsosiemusztardowomiodowym'];
					if(!empty($kurczakwsosiemusztardowomiodowym))
					{
						$N = count($kurczakwsosiemusztardowomiodowym);
						for($i=0; $i < $N; $i++)
						{
							echo("<li>" . $kurczakwsosiemusztardowomiodowym[$i] . "</li>");
						}
					}
				}

				if(isset($_POST['zupapomidorowa']))
				{
					$zupapomidorowa = $_POST['zupapomidorowa'];
					if(!empty($zupapomidorowa))
					{
						$N = count($zupapomidorowa);
						for($i=0; $i < $N; $i++)
						{
							echo("<li>" . $zupapomidorowa[$i] . "</li>");
						}
					}
				}
			?>	
		</ol>
	</body>
</html>