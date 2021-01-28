<?php
session_start();
include_once('conexao.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$apagar_usuario = "DELETE FROM usuarios WHERE id='$id'";
$resultado_apagar = mysqli_query($conn, $apagar_usuario);

if(mysqli_affected_rows($conn)){
  $_SESSION['msg'] = "<span style='color:green;'>Usuário apagado com Sucucesso!</span>";
  header("Location: listar.php");

}else{
  $_SESSION['msg'] = "<span style='color:green;'>Usuário não foi apagado com Sucucesso!</span>";
  header("Location: listar.php");

}