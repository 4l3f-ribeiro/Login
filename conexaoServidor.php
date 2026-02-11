<?php
    //conexao com o banco
    $host="162.250.125.14";
    $user="rosanaregia_ds3aa";
    $password="phila@3aa";
    $dbname="rosanaregia_3aa";

    $conn=new mysqli($host,$user,$password,$dbname);

    //verifica conexão
    if($conn->connect_error){
        die("Conexão falho: ".$conn->connect_error);
    }else{
        echo "Conexão Servidor ok";
    }
?>