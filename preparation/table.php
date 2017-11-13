<?php
    $n = $_GET[native]; $f = $_GET[foreign];
    if (($n == "ru" && $f == "de") || ($n == "de" && $f == "ru")) {
        $table = "ru_de";
        $papka = "ru-de";
        $pr = "RD";
        if ($n == "ru") { $num_n = 1; $num_f = 2; }
        if ($n == "de") { $num_n = 2; $num_f = 1; }
    }
    if (($n == "en" && $f == "de") || ($n == "de" && $f == "en")) {
        $table = "en_de";
        $papka = "en-de";
        $pr = "ED";
        if ($n == "en") { $num_n = 1; $num_f = 2; }
        if ($n == "de") { $num_n = 2; $num_f = 1; }
    }
    if (($n == "en" && $f == "ru") || ($n == "ru" && $f == "en")) {
        $table = "en_ru";
        $papka = "en-ru";
        $pr = "ER";
        if ($n == "ru") { $num_n = 1; $num_f = 2; }
        if ($n == "en") { $num_n = 2; $num_f = 1; }
    }
?>