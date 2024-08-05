<?php
    $servidor = "localhost";
    $usario = "root";
    $senha = "";
    $banco = "cadastro_cliente";

    $conexao = new mysqli($servidor,$usario,$senha,$banco);

    if(mysqli_connect_errno()){
        echo "ERROO DE CONEXÃO";
    }
   // else {
   //     echo "CONECTADO, TUDO CERTO CHEFE";
   // }
