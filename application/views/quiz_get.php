<?php
	include("application/helpers/a_config.php");
	defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <div class="page">
		<head class="header">
			<?php include("layouts/header.php") ?>
		</head>

		<body class="content">
			<?php include("layouts/navigation.php") ?>
			<form method="POST" id="formulaire" action="play">
				<div id="container">
					<h1>Veuillez sélectionner un recueil :</h1>
					<div id="body">
							<label for="pet-select">Recueil:</label>
							<select id="select_recueil" name="recueil" onchange="newData();">
								<option id="default_recueil" value=''>--Veuillez choisir un Recueil--</option>
								<?php for($i = 0; $i < count($recueil); $i++) { echo "<option value='$i'>$recueil[$i]</option>"; } ?>
							</select>
					</div>
				</div>
				<div id="container" class="ctn_2">
					<h1>Veuillez sélectionner un quiz :</h1>
					<div id="body">
						<label for="pet-select">Quiz:</label>
						<select id="select_quiz" name="quiz"></select>
					</div>
				</div>
				<div id="body">
					<input type="submit" value="Jouer !" onclick="getCurrentQuizValue();">
				</div>
			</form>
		</body>
		<footer class="footer">
			<?php include("layouts/footer.php") ?>
		</footer>
	</div>
</html>