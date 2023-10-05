<?php

    $usuario='root';
    $senha='';
    $database='lotus';
    $host='localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error){
        die("Falha ao conectar-se ao banco de dados".$mysqli->error);
    }

?>