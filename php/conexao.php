<?php
    $conn;
    $conn = mysqli_connect('localhost:3310','root','','db_moon');

    if(!$conn){
        echo "ERRO NO BANCO!";
    }