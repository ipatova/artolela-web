<?php
    header('Content-Type: text/html; charset=utf-8'); // coding
    
    $lines = count(file('file.txt'));
    $fp = fopen('file.txt', 'a');
    $fp1 = fopen('answers.txt', 'a');
    
    $arr = explode('|', $_GET[answers]);
    $answer1 = $arr[0]; $answer2 = $arr[1]; $answer3 = $arr[2]; $answer4 = $arr[3];
    $right = $arr[4]; $name = $arr[5]; $way_f = $arr[6]; $chosen = $arr[7]; 
    $way_l = $arr[8]; $amount_l = $arr[9]; $way_w = $arr[10]; $table = $arr[11]; $prefix = $arr[12];
    #$s = $answer1.'|'.$answer2.'|'.$answer3.'|'.$answer4.'|'.$right.'|'.$name.'|'.$way_f.'|'.$chosen.'|'.$way_l.'|'.$amount_l.'|'.$way_w.'|'.$table.'|'.$prefix.'|'.$lines;
    var_dump($arr);
    
     if ($lines == $amount_l-1) {
        if ($chosen == $right) {
            fwrite($fp, '1'. PHP_EOL); 
        }
        else {
            fwrite($fp, '0'. PHP_EOL);
        }
        header('Location: check.php');
    }
    else {
        if ($chosen == $right) {
            fwrite($fp, '1'. PHP_EOL);    
        }
        else {
            fwrite($fp, '0'. PHP_EOL);
        }
        header('Location: '.$way_l);
    }
    /* first answer|second answer|third answer|forth answer|right answer|answer in native|link to picture in folder|chosen answer|link to picture in wiki|table|pr */
    fwrite($fp1, $arr[0].'|'.$arr[1].'|'.$arr[2].'|'.$arr[3].'|'.$arr[4].'|'.$arr[5].'|'.$arr[6].'|'.$arr[7].'|'.$arr[10].'|'.$arr[11].'|'.$arr[12].PHP_EOL);
    				            
?>