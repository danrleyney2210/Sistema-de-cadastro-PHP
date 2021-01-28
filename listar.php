<?php
  session_start();
  include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="styles/listar.css">
  <title>Listar</title>
</head>
<body>
  <div class="content">
      <h3>Lista de usuários</h3>
    <?php
        if(isset($_SESSION['msg'])){
        echo "<p class='text-alert'>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
		  }
		?>
     <p class="text-sub">Para cadastrar mais usuários clique em cadastrar</p>
      <a href="index.php"><button class="btn btn-primary" >Cadastrar</button></a>
      <hr>
    <?php
      $listar_usuario = "SELECT * FROM usuarios";
      $resultado_listar = mysqli_query($conn, $listar_usuario);

      while($row_usuario = mysqli_fetch_assoc($resultado_listar)){
        echo "<div class='content-list'>";
        echo "<div class='item-list'>";
        echo "<p class='text-p'>ID: ".$row_usuario['id']. "<br>";
        echo "Nome: ".$row_usuario['Nome']. "<br>";
        echo "email: ".$row_usuario['email']. "</p>";
        echo "</div>";
        echo "<div class='item-list'>";
        echo "<a href='editar.php?id= ".$row_usuario['id']. "'><button class='btn_listar btn_editar'>Editar</button></a>";
        echo "<a href='apagar.php?id= ".$row_usuario['id']. "'><button class='btn_listar btn_apagar'>Apagar</button></a>";
        echo "</div>";
        echo "</div>";
        echo "<hr>";
      }  
    ?>
  </div>
  
</body>
</html>