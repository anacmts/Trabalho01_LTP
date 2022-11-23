<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Fazer cadastro</title>

        <link rel="stylesheet" type="text/css" href="cadastro.css" media="screen">
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <meta charset="UTF-8">
        <meta name="description" content="Página de cadastro">
    </head>
    
    <body>
    <h1> 
            <div><img src="https://static.vecteezy.com/system/resources/previews/001/200/134/non_2x/book-png.png" style="width: 50px;">
            </div>Migalhas de Sabedoria
        </h1>

        <ul>
            <!--Loop-->
            <?php
            $opcoes = array("Amazon", "Submarino", "Kindle", "Kindle unlimited");
            $links = array("https://www.amazon.com.br/", "https://www.submarino.com.br/", "https://www.amazon.com.br/ebooks-kindle/b/?ie=UTF8&node=5475882011&ref_=nav_cs_kindle_books", "https://www.amazon.com.br/kindle-dbs/hz/subscribe/ku?ref_=sv_kinc_2&ie=UTF8");

            for($i=0; $i<4; $i++){
                echo "<li><a href='$links[$i]' target='_blank'>$opcoes[$i]</a></li>";
            }
            ?>

            <div class="cl">
                <li><a href="Login.html" target="_blank">Login</a></li>
                <li><a href="Cadastro.html" target="_blank">Cadastro</a></li>
            </div>
        </ul>
        
      <!--Validação-->
      <?php
      $nomespan = $emailspan = "";
      $nome = $email = "";
      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nome"])) {
          $nomespan = "Nome é obrigatório";
        } else {
          $nome = test_input($_POST["nome"]);
        }
        if (empty($_POST["email"])) {
          $emailspan = "E-mail é obrigatório";
        } else {
          $email = test_input($_POST["email"]);
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
          <br>
          <br>
        </div>
        <div>
          <label for="confirmsenha">Confirmar senha:</label>
          <br>
          <input type="password" id="confirmsenha" name="confirmsenha" size="35" placeholder="Confirme sua senha" >
          <br>
          <br>
        </div>
        <div class="field radiobox">
        <span>Deseja receber novidades?</span>
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
