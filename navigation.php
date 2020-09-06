<div class="container nav-bar">
    <div class="row">
        <div class="col-md-10">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Home") { ?>active<?php } ?>" href="http://10.0.2.110/~wmezard/gl2020-iotia-lp-iotia---groupe-3/index.php/home/index">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($CURRENT_PAGE == "Create_Quiz") { ?>active<?php } ?>" href="/index.php/quiz/create_quiz">Créer un Quiz</a>
        </li>
		<li class="nav-item">
			<a class="nav-link <?php if ($CURRENT_PAGE == "Play_Quiz") { ?>active<?php } ?>" href="/index.php/quiz/play">Jouer</a>
		</li>
    </ul>
    </div>
    <div class="col-md-2">
        <button onClick="changeStyle()">STYLE</button>
    </div>
    </div>
</div>
