<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Fazer login</title>

        <link rel="stylesheet" type="text/css" href="login.css" media="screen">

        <meta charset="UTF-8">
        <meta name="description" content="Página de login">
    </head>
    
    <body>
      <?php
$emailspan = $senhaspan = "";
$email = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailspan = "E-mail é obrigatório";
  } else {
    $email = test_input($_POST["email"]);
  }
if (empty($_POST["senha"])) {
    $senhaspan = "Senha é obrigatória";
  } else {
    $senha = test_input($_POST["senha"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <h1 id="id1">LOGIN</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <div>
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" size="35" placeholder="Ex: itallopedro25@gmail.com">
                    <span>* <?php echo $emailspan;?></span>
                    <br>
                    <br>
                </div>
                <div> 
                    <label for="senha">Senha:</label>
                    <br>
                    <input type="password" id="senha" name="senha" size="35" placeholder="balaosuspeito" >
                    <span>* <?php echo $senhaspan;?></span>
                    <br>
                    <br>
                </div>

                <button class="botao" type="submit">Fazer login</button>
            </fieldset>
        </form>
    </body>
</html>
