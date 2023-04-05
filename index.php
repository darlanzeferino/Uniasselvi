<?php

require('database/conn.php')

?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/g1.png">
		</div>
		<div class="login-content">
			<form id="casdastro-form" method="post">
		


				<h2 class="title">Bem Vindo!</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" name="password"  class="input">
            	   </div>
            	</div>
				<?php

// Verifica se o formulário de login foi enviado
if (isset($_POST['login'])) {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  // Consulta o banco de dados para verificar as credenciais do usuário
  $sql = "SELECT * FROM usuarios WHERE nome='$username' AND senha='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Login bem-sucedido
    echo "Login efetuado com sucesso!";
	header('Location: views/home.php');
  } else {
    // Login falhou
    echo "Usuário ou senha inválidos.";
  }
}



$conn->close();
?>
            	
            	<input type="submit" name="login"  value="Login">
				<a href="database/cadastro.php">CADASTRE-SE</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>

	
</body>
</html>
