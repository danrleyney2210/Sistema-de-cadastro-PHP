<?php

session_start();
include_once("conexao.php");

$nome =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$id= filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "UPDATE usuarios SET 
  nome = '$nome',
  email = '$email'
  WHERE id='$id'";

$resultado =  mysqli_query($conn, $result_usuario);
if(mysqli_affected_rows($conn)){
  $_SESSION['msg'] = "<span style='color:green;'>Usuário Editado com Sucucesso!</span>";
  header("Location: listar.php");
}else{
  $_SESSION['msg'] = "<span style='color:red;'>Usuário não foi editado com Sucucesso!</span>";
  echo "Falha ao cadastrar";
  header("Location: editar.php");
}
