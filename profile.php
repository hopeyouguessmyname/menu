<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<!--<script src="javascripts/prototype.js" type="text/javascript" />-->
		<script src="javascripts/myJS.js" type="text/javascript"></script>
		<title>
			Menu
		</title>
	</head>
	<body>
		<?php
			require('db.php');

	 		if(isset($_POST['meal']))
			{
				$meal = $_POST['meal'];

				$dBase = new dBase;
				$dBase->connectServer('localhost:3306', 'root', '');
				$dBase->selectDbase('menu');

				$dBase->insertRecord('INSERT INTO meals (meal_name, user_id) VALUES (\'' . $meal . '\', 1)');
			}	
	 	?>
		<a href="controlpanel.html">control panel</a>
		<a href="index.html">log in</a>
		<a href="ingredients.php">ingredients</a>
		<h1>
			Menu
		</h1>
		<hr>
		<form action="lista.php" method="post">
			<ol id="list">
				<li class="meal">
					<h2><i>
						<input onclick="findMeal(0)" type="checkbox" name="nalesniki" value="Naleśniki">
						Naleśniki
					</i></h2>
					<h3>
						Składniki
					</h3>
					<ul>
						<li>
							<input type="checkbox" name="nalesniki[]" value="Mąka">
							mąka
						</li>
						<li>
							<input type="checkbox" name="nalesniki[]" value="Jaja">
							jajko
						</li>
						<li>
							<input type="checkbox" name="nalesniki[]" value="Mleko">
							mleko
						</li>
						<li>
							<input type="checkbox" name="nalesniki[]" value="Olej">
							olej
						</li>
						<li>
							<input type="checkbox" name="nalesniki[]" value="Konfitura">
							konfitura
						</li>
						<li>
							<input type="checkbox" name="nalesniki[]" value="Bita śmietana">
							bita śmietana
						</li>
					</ul>
				</li>
				<li class="meal">
					<h2><i>
						<input onclick="findMeal(1)" type="checkbox" name="risotto" value="Risotto">
						Risotto
					</i></h2>
					<h3>
						Składniki
					</h3>
					<ul>
						<li>
							<input type="checkbox" name="risotto[]" value="Filet z kurczaka">
							filet z kurczaka
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Cukinia">
							cukinia
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Por">
							por
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Młoda cebulka">
							młoda cebulka
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Śmietana 12%">
							śmietana 12%
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Białe wino">
							białe wino półwytrawne
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Ryż">
							ryż
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Czosnek">
							czosnek
						</li>
						<li>
							<input type="checkbox" name="risotto[]" value="Sól">
							sól
						</li>
					</ul>
				</li>
				<li class="meal">
					<h2><i>
						<input onclick="findMeal(2)" type="checkbox" name="wolowinawsosiesojowym" value="Wołowina w sosie sojowym">
						Wołowina w sosie sojowym
					</i></h2>
					<h3>
						Składniki
					</h3>
					<ul>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Wołowina pokrojona w kostkę">
							wołowina pokrojona w kostkę
						</li>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Søs sojowy">
							sos sojowy
						</li>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Cukier brązowy">
							cukier brązowy
						</li>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Makaron tagliatelle">
							makaron tagliatelle
						</li>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Por">
							por
						</li>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Czosnek">
							czosnek
						</li>
						<li>
							<input type="checkbox" name="wolowinawsosiesojowym[]" value="Masło">
							masło
						</li>
					</ul>
				</li>
				<li class="meal">
					<h2><i>
						<input onclick="findMeal(3)" type="checkbox" name="chilliconcarne" value="Chilli con carne">
						Chilli con carne
					</i></h2>
					<h3>
						Składniki
					</h3>
					<ul>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Mięso mielone">
							mięso mielone
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Ryż">
							ryż
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Cebula">
							cebula
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="2 puszki krojonych pomidorów">
							2 puszki krojonych pomidorów
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="1 puszka czerwonej fasoli">
							1 puszka czerwonej fasoli
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Przyprawa chilli con carne">
							przyprawa chilli con carne
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Pieprz">
							pieprz
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Sól">
							sól
						</li>
						<li>
							<input type="checkbox" name="chilliconcarne[]" value="Śmietana 12%">
							śmietana 12%
						</li>
					</ul>
				</li>
				<li class="meal">
					<h2><i>
						<input onclick="findMeal(4)" type="checkbox" name="kurczakwsosiemusztardowomiodowym" value="Kurczak w sosie musztardowo miodowym">
						Kurczak w sosie musztarowo miodowym
					</i></h2>
					<h3>
						Składniki
					</h3>
					<ul>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Udka kurczaka">
							udka kurczaka
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Musztarda francuska">
							musztarda francuska
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Musztarda sarepska">
							musztarda sarepska
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Miód">
							miód
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Ocet biały">
							ocet biały
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Pieprz">
							pieprz
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Sól">
							sól
						</li>
						<li>
							<input type="checkbox" name="kurczakwsosiemusztardowomiodowym[]" value="Ziemniaki">
							zmieniaki
						</li>
					</ul>
				</li>
				<li class="meal">
					<h2><i>
						<input onclick="findMeal(5)" type="checkbox" name="zupapomidorowa" value="Zupa pomidorowa">
						Zupa pomidorowa
					</i></h2>
					<h3>
						Składniki
					</h3>
					<ul>
						<li>
							<input type="checkbox" name="zupapomidorowa[]" value="Przecier pomidorowy">
							przecier pomidorowy
						</li>
						<li>
							<input type="checkbox" name="zupapomidorowa[]" value="Bulion w kostkach">
							bulion w kostkach
						</li>
						<li>
							<input type="checkbox" name="zupapomidorowa[]" value="Śmietana 18%">
							śmietana 18%
						</li>
						<li>
							<input type="checkbox" name="zupapomidorowa[]" value="Makaron świderki">
							makaron świderki
						</li>
					</ul>
				</li>
			</ol>
			<hr>
			<input type="submit">
		</form>
		<br>
		<br>
		<br>
		<br>
	</body>
</html>