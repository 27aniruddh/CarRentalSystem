<?php 
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = new mysqli('localhost', 'root', '', 'carproject', 3309);
    if(!$con)
    {
        echo 'please check your Database connection';
    }







?>