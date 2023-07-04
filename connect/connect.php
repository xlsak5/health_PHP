<?php
    $host = "localhost";
    // 닷홈 로그인
    $user = "xlsak3";
    $pw = "q1w2e3r4!";
    $db = "xlsak3";

    // MAMP 로그인
    // $user = "root";
    // $pw = "root";
    // $db = "phpclass";
    $connect = new mysqli($host, $user, $pw, $db);
    $connect -> set_charset("uft-8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>