<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Fazer cadastro</title>

        <link rel="stylesheet" type="text/css" href="cadastro.css" media="screen">

        <meta charset="UTF-8">
        <meta name="description" content="Página de cadastro">
    </head>
    
    <body>
      <?php
$nomespan = $idadespan = $emailspan = $senhaspan = $confirmsenhaspan = "";
$nome = $idade = $email = $senha = $confirmsenha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["nome"])) {
    $nomespan = "Nome é obrigatório";
  } else {
    $nome = test_input($_POST["nome"]);
  }
if (empty($_POST["idade"])) {
    $idadespan = "Idade é obrigatório";
  } else {
    $idade = test_input($_POST["idade"]);
  }
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
if (empty($_POST["senha"])) {
    $confirmsenhaspan = "Confirmação de senha é obrigatória";
  } else {
    $confirmsenha = test_input($_POST["confirmsenha"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <h1 id="id1">CADASTRO</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
            <fieldset>
                <div>
                    <label for="nome">Nome do usuário:</label>
                    <br>
                    <input type="text" id="nome" name="nome" size="35" placeholder="Digite seu nome ou apelido">
                  <span>* <?php echo $nomespan;?></span>
                    <br>
                    <br>
                </div>
                <div>
                    <label for="idade">Idade:</label>
                    <br>
                    <input type="number" id="idade" name="idade" min="1" max="100" >
                  	<span>* <?php echo $idadespan;?></span>  
                  	<br>
                    <br>
                </div>
                <div>
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" size="35" placeholder="Ex: itallo.pedro@gmail.ifgoiano.edu.br" >
                  <span>* <?php echo $emailspan;?></span>
                    <br>
                    <br>
                </div>
                <div> 
                    <label for="senha">Senha:</label>
                    <br>
                    <input type="password" id="senha" name="senha" size="35" placeholder="Digite sua senha">
                  <span>* <?php echo $senhaspan;?></span>
                    <br>
                    <br>
                </div>
                <div>
                    <label for="confirmsenha">Confirmar senha:</label>
                    <br>
                    <input type="password" id="confirmsenha" name="confirmsenha" size="35" placeholder="Confirme sua senha" >
                  <span>* <?php echo $confirmsenhaspan;?></span>
                    <br>
                    <br>
                </div>
                <div class="field radiobox">
                    <span>Deseja receber notificações?</span>
                    
                    <input type="radio" name="novidades" id="sim" value="sim" checked>
                    <label for="sim">Sim</label>
                    
                    <input type="radio" name="novidades" id="nao" value="nao">
                    <label for="nao">Não</label>
                    <br>
                    <br>
                </div>
                
                <button class="botao" type="submit">Fazer cadastro</button>
            </fieldset>
        </form>
    </body>
</html>
