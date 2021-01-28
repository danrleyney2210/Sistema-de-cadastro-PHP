<?php

$nome_cliente = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_STRING);
$email_cliente = filter_input(INPUT_POST, 'email_cliente', FILTER_SANITIZE_EMAIL);
echo "Nome cliente: ". $nome_cliente. "<br>";
echo "Emai do cliente: ". $email_cliente. "<br>";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($dados);