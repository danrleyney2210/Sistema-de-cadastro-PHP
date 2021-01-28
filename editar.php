<?php
  session_start();
  include_once("conexao.php");
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

  $result_usuario = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1 ";
  $resultado_usuario = mysqli_query($conn, $result_usuario);

  $row_usuario = mysqli_fetch_assoc($resultado_usuario);
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>Editar</title>
</head>
<body>
<div class="container">
    <h4>Editar Usuário</h4>
    <?php
        if(isset($_SESSION['msg'])){
        echo "<p>".$_SESSION['msg']."</p>";
        unset($_SESSION['msg']);
		  }
		?>
    <form action="editar_update.php" method="POST">
     
      <input id="nome" type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $row_usuario['Nome']; ?>" > <br>
      <input id="email" type="email"name="email" placeholder="Digite Seu Email" value="<?php echo $row_usuario['email']; ?>" ><br>
      <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
      <a href=""><button class="btn btn-primary" type="submit">Editar</button></a>
    
    </form>

  </div><!--Container -->
  
</body>
</html>