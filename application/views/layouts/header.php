<?php
//$session_style = (isset($_SESSION['global_style'])) ? $_SESSION['global_style'] : '0'; ?>
<meta charset="utf-8">
<title>
<?php 
    if(isset($PAGE_TITLE)) { echo $PAGE_TITLE; } else { echo 'Quiz DMLA'; }
    $session_style = '1';
    if (!empty($_COOKIE['cookieStyle'])) { 
        $session_style	 = $_COOKIE['cookieStyle'];
     }
?>
</title>
<link id="style_sheet" rel="stylesheet" type="text/css" href="../../public/css/global_size_<?php echo $session_style ?>.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<?php
    if(isset($jQuery) && $jQuery == True) echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
    if(isset($JS_QUIZ_GET) && $JS_QUIZ_GET == True) echo '<script src="/../public/js/quiz_get.js"></script>';
    if(isset($JS_QUIZ_PLAY) && $JS_QUIZ_PLAY == True) echo '<script src="/../public/js/quiz_play.js"></script>';
?>