<div class="container nav-bar">
    <div class="row">
        <div class="col-md-10">
    <ul class="nav nav-pills col-md-12">
        <li class="nav-item style-button col-md-4">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Home") { ?>active<?php } ?>" href="/index.php/home/index">
           <span class="style-button-font">Home</span></a>
        </li>
        <li class="nav-item style-button col-md-4">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Create_Quiz") { ?>active<?php } ?>" href="/index.php/quiz/create_quiz">
            <span class="style-button-font">Créer un Quiz</span></a>
        </li>
		<li class="nav-item style-button col-md-4">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Get_Quiz") { ?>active<?php } ?>" href="/index.php/quiz/get_quiz">
            <span class="style-button-font">Jouer</span>
        </a>
		</li>
    </ul>
    </div>
    <div class="col-md-2">
        <button class="btn style-button" onClick="changeStyle()">
           <span class="style-button-font">Changer apparence</span></button>
    </div>
    </div>
</div>
