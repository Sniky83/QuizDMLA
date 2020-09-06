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
		<body class="content"> <!--<onload="changeStyle()">-->
			<?php include("layouts/navigation.php") ?>
			<h1>Créer un ensemble de questions & réponses</h1>
			<div id="container">
				<div id="body">
					<form method="POST">
						<label for="recueil">Titre du Recueil :</label>
						<input type="text" name="recueil" placeholder="Recueil Historique" value="recueil1" size="60" minlength="6" maxlength="255">
						<br/>

						<label for="title">Titre du Quiz :</label>
						<input type="text" name="title" placeholder="Quiz de Culture Générale" value="titre1" size="60" minlength="6" maxlength="255">
						<br/>

						<label for="question">Question :</label>
						<input type="text" name="question" placeholder="Qui est le président actuel en France ?" value="Qui est le président actuel en France ?" size="60" minlength="12" maxlength="255">
						<br/>

						<label for="reponse_1">Réponse n°1 :</label>
						<input type="text" name="reponse_1" placeholder="Nicolas Sarkozy" value="Nicolas" size="60" minlength="3" maxlength="255">
						<input type="radio" name="choix" value="1">
						<br/>
						<label for="reponse_2">Réponse n°2 :</label>
						<input type="text" name="reponse_2" placeholder="Jacques Chirac" value="Sarkozy" size="60" minlength="3" maxlength="255">
						<input type="radio" name="choix" value="2">
						<br/>
						<label for="reponse_3">Réponse n°3 :</label>
						<input type="text" name="reponse_3" placeholder="Francois Hollande" value="Jacques" size="60" minlength="3" maxlength="255">
						<input type="radio" name="choix" value="3">
						<br/>
						<label for="reponse_4">Réponse n°4 :</label>
						<input type="text" name="reponse_4" placeholder="Emmanuel Macron" value="Chirac" size="60" minlength="3" maxlength="255">
						<input type="radio" name="choix" value="4" checked>
						<br/>

						<input type="button" value="Ajouter une nouvelle question" id="btn_add" onclick="add_new_question();">
						<br/>
						<br/>
						<p>PS: Veuillez sélectionner une réponse juste en cliquant sur le rond en face de la question concernée.</p>
						<input type="submit" value="Créer un Quiz">
					</form>
				</div>
			</div>
		</body>
		<footer class="footer">
			<?php include("layouts/footer.php") ?>
		</footer>
	</div>
</html>
