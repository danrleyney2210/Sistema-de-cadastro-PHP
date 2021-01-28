<?php
session_start();
include_once("conexao.php");

$nome =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);



$inserir_usuario = "INSERT INTO usuarios (Nome, email)VALUES('$nome', '$email')";
$resultado = mysqli_query($conn, $inserir_usuario);

if(mysqli_insert_id($conn)){
  $_SESSION['msg'] = "<span style='color:green;'>Usuário cadastrado com Sucucesso!</span>";
  header("Location: listar.php");
}else{
  $_SESSION['msg'] = "<span style='color:red;'>Usuário não foi cadastrado com Sucucesso!</span>";
  echo "Falha ao cadastrar";
  header("Location: index.php");
}

