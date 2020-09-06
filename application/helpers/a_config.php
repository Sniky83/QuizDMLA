<?php
	switch ($_SERVER['REQUEST_URI']) {
		case "/":
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "Accueil";
		break;
		case "/index.php/quiz/get_quiz":
			$CURRENT_PAGE = "Get_Quiz";
			$PAGE_TITLE = "Choix d'un Quiz";
			$jQuery = True;
			$JS_QUIZ_GET = True;
		break;
		case "/index.php/quiz/play":
			$CURRENT_PAGE = "Play_Quiz";
			$PAGE_TITLE = "Jouer un Quiz";
			$jQuery = True;
			$JS_QUIZ_PLAY = True;
		break;
		case "/index.php/home/index":
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "Accueil";
		break;
		case "/index.php/home":
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "Accueil";
		break;
		case "/index.php/quiz/create_quiz":
			$CURRENT_PAGE = "Create_Quiz";
			$PAGE_TITLE = "Créer un Quiz";
		break;
	}
?>
