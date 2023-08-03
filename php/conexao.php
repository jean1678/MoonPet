<?php
try
{
    $pdo = new PDO('mysql:host=localhost;port=3310;dbname=db_moon;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
}
catch(Exception $e)
{
    echo "Erro generico: ".$e-> getMessage();;
}