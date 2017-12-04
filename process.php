<?php
    //header('Content-Type: text/html; charset=utf-8'); // coding
    session_start();
    $arr = explode('|', $_GET['answers']);
    
    $answer1 = $arr[0]; $answer2 = $arr[1]; $answer3 = $arr[2]; $answer4 = $arr[3];
    $right = $arr[4]; $name = $arr[5]; $way_f = $arr[6]; $chosen = $arr[7]; 
    $way_l = $arr[8]; $amount_l = $arr[9]; $way_w = $arr[10]; $table = $arr[11]; $prefix = $arr[12];
    
    $i = floor(count($_SESSION)/13);
    var_dump($arr);
    $_SESSION[$i."_answer1"] = $answer1;
    $_SESSION[$i."_answer2"] = $answer2;
    $_SESSION[$i."_answer3"] = $answer3;
    $_SESSION[$i."_answer4"] = $answer4;
    $_SESSION[$i."_right"] = $right;
    $_SESSION[$i."_name"] = $name;
    $_SESSION[$i."_way_f"] = $way_f;
    $_SESSION[$i."_chosen"] = $chosen;
    $_SESSION[$i."_way_l"] = $way_l;
    $_SESSION[$i."_amount_l"] = $amount_l;
    $_SESSION[$i."_way_w"] = $way_w;
    $_SESSION[$i."_table"] = $table;
    $_SESSION[$i."_prefix"] = $prefix;
    if ($i == $amount_l-1) {
        header('Location: check.php');
        $_SESSION["file"] = "level";
    }
    else {
        header('Location: '.$way_l);
    }
    				            
?>