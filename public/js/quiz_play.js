$(document).ready(function() { 
    $("#ratio").hide();
});
let currentQuestionCursor = 1;

function newData()
{
    $.ajax({
        type: 'GET',
        url: '../../public/recueil/quiz.json',
        dataType: 'json',
        success: function(data){
            //On récup l'index du radio button que l'on vient de checker
            const choixActuel = $("input[name=choix]:checked", "#main").val();
        
            //Si l'user ne coche pas de Radio button
            if(!$.isNumeric(choixActuel))
            {
                alert("Veuillez choisir une réponse !");
                return;
            }

            let currentPoints = parseInt($("#current_points").val());
            const currentQuestion = $("#current_question").val();

            //Récupération des data en POST par le billais des hidden input
            const post_recueil = $("#recueil").val();
            const post_quiz = $("#quiz").val();

            const maxQuestions = data.recueil[post_recueil].quiz[post_quiz].questions.length;

            let getCurrentQuestion = data.recueil[post_recueil].quiz[post_quiz].questions[currentQuestion];

            console.log(choixActuel+"---"+getCurrentQuestion.choix);
            if(choixActuel == getCurrentQuestion.choix)
            {
                alert("Bonne Réponse !");
                currentPoints = currentPoints + 1;
                let currentNbPoints = $("#nb_points").html("Vous avez actuellement : "+currentPoints);
                if(currentPoints == 0 || currentPoints == 1)
                {
                    currentNbPoints.append(" point !");
                }
                else
                {
                    currentNbPoints.append(" points !");
                }
                $("#current_points").val(currentPoints);
            }
            else
            {
                alert("Mauvaise Réponse ! La bonne réponse était : "+getCurrentQuestion.reponses[getCurrentQuestion.choix].reponse);
            }

            //On incrémente tant qu'on est inférieur au nombre max de questions
            //il faut pas que ça dépasse le nombre max de questions a cause de l'index du tableau
            if(currentQuestion < (maxQuestions - 1))
            {
                let increment = parseInt(currentQuestion) + 1;
                $("#current_question").val(increment);

                getCurrentQuestion = data.recueil[post_recueil].quiz[post_quiz].questions[increment];

                //On va ajouter la question courrante dans la balise p
                $("#question").html(getCurrentQuestion.question);
                for(let i = 0; i < 4; i++)
                    $("#"+i).html(getCurrentQuestion.reponses[i].reponse);

                console.log(increment);
            }

            //Quand on est à la fin du Quiz
            if(currentQuestionCursor == maxQuestions)
            {
                alert("Fin de la partie !");
                //On affiche le taux de réussite du joueur
                ratio(currentPoints, maxQuestions);
                let finalResult = $("#nb_points").html("Votre score final est de : "+currentPoints);
                if(currentPoints == 0 || currentPoints == 1)
                {
                    finalResult.append(" point !");
                }
                else
                {
                    finalResult.append(" points !");
                }
                $("#cur_question").hide();
                $("#valid_btn").hide();
                $("#main").hide();
                $("#end_btn").val("Retourner à l'accueil");
                //A voir plus tard
                $("#flash").val("");
            }
            else
            {
                //On incrémente le compteur sur la question
                currentQuestionCursor +=  1;
                $("#cur_question").html("Vous êtes à la question : "+currentQuestionCursor);
            }
        },
        error: function (data){
            console.log("Erreur de chargement du fichier JSON (AJAX)!");
            console.log(data);
        }
    });
}

function ratio(currentPoints, maxQuestions)
{
    ratio = currentPoints / maxQuestions;
    ratio = ratio * 100;
    ratio = ratio + "%";
    $("#ratio").append(ratio);
    $("#ratio").show();
}