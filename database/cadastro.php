<?php

require('conn.php')

?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/g1.png">
		</div>
		<div class="login-content">
			<form id="casdastro-form" method="post">
		


				<h2 class="title">cadastre-se!</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" name="username" placeholder="" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" name="password" placeholder="" class="input">
            	   </div>
            	</div>
				<?php



// Verifica se o formulário de cadastro foi enviado
if (isset($_POST['cadastrar'])) {
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

  // Verifica se o usuário já existe no banco de dados
  $sql = "SELECT * FROM usuarios WHERE nome='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0 ) {
    // Usuário já cadastrado
    echo "Usuário já cadastrado.";

  } else {
    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO usuarios (nome,senha) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "Usuário cadastrado com sucesso!";
	  
    } else {
      echo "Erro ao cadastrar usuário: ";
    }
  }
}

$conn->close();
?>
            	
            	<input type="submit" name="cadastrar"  value="CADASTRAR">
            	<a href="../index.php">FAÇA LOGIN</a>
				
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>

	
</body>
</html>
