$(document).ready(function() { 
    $(".ctn_2").hide();
});

let state = 0;

function newData()
{
    $.ajax({
        type: 'GET',
        url: '../../public/recueil/quiz.json',
        dataType: 'json',
        success: function(data){
            $("#select_quiz").empty();
            let currentOptionValue = $("#select_recueil").val();
            if(currentOptionValue != "" && state == 0)
            {
                $("#default_recueil").hide();
                $(".ctn_2").show();
                state = 1;
            }
            let maxQuizLength = data.recueil[currentOptionValue].quiz.length;
            for(let i = 0; i < maxQuizLength; i++)
                $("#select_quiz").append(new Option(data.recueil[currentOptionValue].quiz[i].title, i));
        },
        error: function (data){
            console.log("Erreur de chargement du fichier JSON (AJAX)!");
            console.log(data);
        }
    });
}

function getCurrentQuizValue()
{
    let currentQuizValue = $("#select_quiz").val();

    //On ne joue pas tant que l'user n'a pas sélectionné de quiz ni de recueil.
    if(currentOptionValue == null || currentQuizValue == null)
    {
        alert("Veuillez choisir un recueil et un quiz pour jouer !");
    }
    else
    {
        //Envoi des paramètres en POST pour choisir le bon quiz et le bon recueil.
        $('<input>').attr('type','hidden','name','recueil','value',currentOptionValue).appendTo('#formulaire');
        $('<input>').attr('type','hidden','name','quiz','value',currentQuizValue).appendTo('#formulaire');
        //Si on avait voulu envoyer les data en GET.
        //$('#formulaire').attr("action", "play?recueil="+currentOptionValue+"&quiz="+currentQuizValue);
    }
}