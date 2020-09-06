<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    public function create_quiz()
	{
		if(
			isset($_POST["title"]) && !empty($_POST["title"]) &&
			isset($_POST["choix"]) && !empty($_POST["choix"]) &&
			isset($_POST["question"]) && !empty($_POST["question"]) &&
			isset($_POST["reponse_1"]) && !empty($_POST["reponse_1"]) &&
			isset($_POST["reponse_2"]) && !empty($_POST["reponse_2"]) &&
			isset($_POST["reponse_3"]) && !empty($_POST["reponse_3"]) &&
			isset($_POST["reponse_4"]) && !empty($_POST["reponse_4"])
		)
		{
			$title = $_POST["title"];
			$correctOne = $_POST["choix"];

			$q = $_POST["question"];

			$answer1 = $_POST["reponse_1"];
			$answer2 = $_POST["reponse_2"];
			$answer3 = $_POST["reponse_3"];
			$answer4 = $_POST["reponse_4"];

			$arr = array("reponse" => $answer1);

			var_dump(json_encode($arr));

			//file_put_contents("public/recueil/quiz.json",json_encode($arr), FILE_APPEND);
			//questions.forEach(question => {question.id);
		}

		$this->load->view('quiz_create');
	}

	public function play()
	{
		if(
			!isset($_POST["recueil"]) || !is_numeric($_POST["recueil"]) ||
			!isset($_POST["quiz"]) || !is_numeric($_POST["quiz"])
		)
		{
			//On renvoi dans la selection d'un quiz
			header("Location: get_quiz");
		}
		else
		{
			//On affiche en dur les informations de la première question puis le reste ce fera en ajax.
			$recueil_file = file_get_contents("./public/recueil/quiz.json");
			$results_recueil = json_decode($recueil_file);

			$msg["question"] = $results_recueil->recueil[$_POST["recueil"]]->quiz[$_POST["quiz"]]->questions[0]->question;

			$msg["title"] = $results_recueil->recueil[$_POST["recueil"]]->quiz[$_POST["quiz"]]->title;

			$msg["reponses"] = array();

			for($i = 0; $i<4; $i++)
				array_push($msg["reponses"], $results_recueil->recueil[$_POST["recueil"]]->quiz[$_POST["quiz"]]->questions[0]->reponses[$i]->reponse);

			$msg["choix"] = $results_recueil->recueil[$_POST["recueil"]]->quiz[$_POST["quiz"]]->questions[0]->choix;

			$msg["maxQuestions"] = count($results_recueil->recueil[$_POST["recueil"]]->quiz[$_POST["quiz"]]->questions);
		}

		$this->load->view('quiz_play', $msg);
	}

	public function get_quiz()
	{ 
		$recueil_file = file_get_contents("./public/recueil/quiz.json");
		$results_recueil = json_decode($recueil_file);

		$data['recueil'] = array();

		foreach ($results_recueil->recueil as $result)
		{
			array_push($data['recueil'], $result->nom);
		}

		$this->load->view('quiz_get', $data);
	}
}
