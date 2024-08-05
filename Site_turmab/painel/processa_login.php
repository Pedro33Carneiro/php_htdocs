<?php
   require('conecta.php');
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $consulta = "SELECT * FROM usarios WHERE email = '$email' AND senha = 'senha'";

   $resultado = $conexao->query($consulta);
   $registros = $resultado->num_rows;
   $resultado_usario = mysqli_fetch_assoc($resultado);

   //var_dump($resultado_usario)

   if($registros == 1){
      //ECHO "TE ACHEI";
      header('location: index.php');
   }
   else






?>