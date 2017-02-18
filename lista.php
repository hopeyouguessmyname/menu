<html>
	<head>
	 	<title>
	 		Lista zakupów
	 	</title>
 	</head>
 	<body>
 		<p>
			<?php 
				if(isset($_POST['nalesniki']))
				{
					$nalesniki = $_POST['nalesniki'];
					if(!empty($nalesniki))
					{
						$N = count($nalesniki);
						for($i=0; $i < $N; $i++)
						{
							echo($nalesniki[$i] . "<br>");
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
							echo($risotto[$i] . "<br>");
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
							echo($wolowinawsosiesojowym[$i] . "<br>");
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
							echo($chilliconcarne[$i] . "<br>");
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
							echo($kurczakwsosiemusztardowomiodowym[$i] . "<br>");
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
							echo($zupapomidorowa[$i] . "<br>");
						}
					}
				}
			?>	
 		</p>
	</body>
</html>