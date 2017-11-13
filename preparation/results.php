<?php
    /* name of table, name of folder, prefix of columns */
    require_once('table.php');
    
    /* amount of lines in file */
    $lines = (count(file('file.txt')))+1;
    
    /* coding */
    header('Content-Type: text/html; charset=utf-8');
    
    /* connection to DB */
    $link = mysqli_connect("localhost","snowwarrio","tainexahiw", "snowwarrio_pictures");
    
    /* Result from DB. Get max id from table */
    $result_of_max_id = mysqli_query($link, 'SELECT max('.$pr.'id) FROM '.$table.';');
    $max_id = mysqli_fetch_row($result_of_max_id);
    
    /* Random choice of picture from DB */
    $id = rand(1, $max_id[0]);
    
    /* Result from DB. Get picture and information about it from table */
    $result_picture_and_info = mysqli_query($link, "SELECT * FROM ".$table. " WHERE ".$pr."id = ".$id);
    $picture_and_info = mysqli_fetch_row($result_picture_and_info);
    
    /* Answers */
    $arr = array();
    $arr[] = $picture_and_info[$num_f];
    while (count($arr) != 4) {
        $id_for_wrong_answers = rand(1, $max_id[0]);
        $result_wrong_answer = mysqli_query($link, "SELECT * FROM ".$table. " WHERE ".$pr."id = ".$id_for_wrong_answers); //the result of query
        $wrong_answer = mysqli_fetch_row($result_wrong_answer);
        $arr[] = $wrong_answer[$num_f];
        $arr = array_unique($arr);
    }
    shuffle($arr);
    
    /* Way to picture in Wikimedia Commons */    
    $way = explode("/", $picture_and_info[4]);
    $all_way = "";
    for ($i = 0; $i < count($way); $i++) {
        if ($way[$i] != 'Special:FilePath') {
            if ($i == 0) {
                $all_way = $all_way.$way[$i];
            }
            else if ($i == count($way)-1) {
                $all_way = $all_way.'/File:'.$way[$i];
            }
            else {
                $all_way = $all_way.'/'.$way[$i];
            }
        }
    }
?>
