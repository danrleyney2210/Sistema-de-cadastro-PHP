<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  
  <title>Cadastrar Usuário</title>
</head>
<body>
  <div class="container">
    <h4>Cadastrar Usuários</h4>
    <?php
        if(isset($_SESSION['msg'])){
        echo "<p>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
		  }
		?>
    <form action="cadastrar.php" method="POST">
     
      <input id="nome" type="text" name="nome" placeholder="Digite seu nome" require> <br>

      
      <input id="email" type="email"name="email" placeholder="Digite Seu Email" require><br>
      <a href=""><button class="btn btn-primary" type="submit">Cadastrar</button></a>
    
    </form>
    
    <a href="listar.php"><button class="btn btn-secondary">Listar</button></a>

  </div><!--Container -->
</body>


</html>