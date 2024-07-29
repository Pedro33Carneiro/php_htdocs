<?php
   $nome= $_GET['nome'];
   $idade= $_GET['idade'];
   $email= $_GET['email'];


   echo "Visão <span style='color:purpple;'>" .$nome . "</span>" ;
   echo "<br>";
   echo "Tá com $idade anos né?";
   echo "<br>";
   echo "seu email é: " .$email ;
?>