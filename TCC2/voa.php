<?php
 $localhost = "localhost";
 $usuario = "root";
 $pass = "usbw";
 $cadastro = "cadastro";

$nome     = $_POST['nome'];
$email    = $_POST['email'];
$genero    = $_POST['genero'];
$estado   = $_POST['estado']; 
$senha    = MD5($_POST['senha']);

$mysqli= new mysqli($localhost, $usuario, $pass, $cadastro);

if ($mysqli->connect_errno){
    echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuario');window.location
        .href='Registrar.html'</script>";
 }else{
    $inserir = mysqli_query($mysqli, "INSERT INTO pessoa(nome,email,genero,estado,senha) 
        VALUES('$nome','$email','$idade','$cidade','$formacao','$cpf','$senha')");
        echo"<script language = 'javascript' type='text/javascript'>
            alert('Usuario cadastrado com succeso !');window.location.
            href='https://www.youtube.com/watch?v=JwL6MCM0wPk'</script>";
 }

?>