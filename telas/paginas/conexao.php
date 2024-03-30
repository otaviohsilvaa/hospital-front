<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbpassword = '';
    $dbName = 'hospital';

    $conexao = new mysqli($dbHost,$dbUsername,$dbpassword,$dbName);

    /* if($conexao->connect_error){
        echo "Erro";
    }else{
        echo "Deu certo";
    } */

?>