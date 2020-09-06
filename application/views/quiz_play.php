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
			<div id="container-fluid play-main">
				<div class="row">
					<div class="col-md-4 play-content">
						<h3><?= $title; ?></h3>
						<div id="body">
								<div id="main">
									<p id="question"><?= $question; ?></p>
									<input class="play-question" type="radio" name="choix" value="0">
									<label id="0" class="empty" for="reponse_1"><?= $reponses[0]; ?></label><br/>

									<input class="play-question" type="radio" name="choix" value="1">
									<label id="1" class="empty" for="reponse_2"><?= $reponses[1]; ?></label><br/>

									<input class="play-question" type="radio" name="choix" value="2">
									<label id="2" class="empty" for="reponse_3"><?= $reponses[2]; ?></label><br/>

									<input class="play-question" type="radio" name="choix" value="3">
									<label id="3" class="empty" for="reponse_4"><?= $reponses[3]; ?></label><br/>
								</div>
								<!--<form method="POST">
									<p>Qui est le président des Etats-unis ?</p>
									<input class="play-question" type="radio" id="hillary" name="choix" value="hillary">
									<label for="hillary">Hillary Clinton</label>

									<input class="play-question" type="radio" id="greta" name="choix" value="greta">
									<label for="greta">Greta Thunberg</label>

									<input class="play-question" type="submit" value="Valider" name="valider_btn">
									<input class="play-question" type="submit" value="Terminer la partie" name="end_btn">-->
								<input id="recueil" type="hidden" value="<?= htmlspecialchars($_POST['recueil'], ENT_QUOTES); ?>">
								<input id="quiz" type="hidden" value="<?= htmlspecialchars($_POST['quiz'], ENT_QUOTES); ?>">
								<input id="current_points" type="hidden" value="0">
								<input id="current_question" type="hidden" value="0">
								<button id="valid_btn" onclick="newData();">Valider</button>
								<!--<input type="submit" value="Valider" name="valider_btn">-->
								<form method="POST" action="../home/index">
									<br/>
									<input id="end_btn" type="submit" value="Quitter la partie" name="end_btn">
									<input id="flash" type="hidden" name="flash" value="Vous venez de quitter la partie !">
								</form>
						</div>
					</div>
						<div class="col-md-4 offset-md-4 play-content">
							<h3>Résultats</h3>
							<p id="nb_points">Vous avez actuellement : 0 point !</p>
							<p id="cur_question">Vous êtes à la question : 1</p>
							<p id="nb_questions">Nombre total de questions : <?= $maxQuestions; ?></p>
							<p id="ratio">Votre pourcentage de réussite est de : </p>
						</div>
					</div>
				</div>
			</div>
		</body>
		<footer class="footer">
			<?php include("layouts/footer.php") ?>
		</footer>
</html>