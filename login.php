<?php
    private $genero = $_POST['genero'];
    private $login = $_POST['usuario'];

    
    if ($genero = "masculino"){

        echo"Bem vindo ". $login . " explore o nosso site o quanto quiser"; 
    }
    if ($genero = "feminino"){

        echo"Bem vinda ". $login. " explore o nosso site o quanto quiser";
    }
    if ($genero = "binario"){

        echo"Bem vinde ". $login . " explore o nosso site o quanto quiser";
    }
?>  