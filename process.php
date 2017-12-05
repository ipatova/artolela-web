<?php
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors','Off');
    
    session_start();
    
    $i = floor(count($_SESSION)/13);
    $_SESSION[$i."_chosen"] = $_GET['answers'];
    if ($i == $_SESSION[$i."_amount_l"]-1) {
        header('Location: check.php');
        $_SESSION["file"] = "level";
    }
    else {
        header('Location: '.$_SESSION[$i."_way_l"]);
    }
    				            
?>