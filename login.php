<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Fazer login</title>

        <link rel="stylesheet" type="text/css" href="login.css" media="screen">
        <link rel="icon" type="image/x-icon" href="favicon.ico">

        <meta charset="UTF-8">
        <meta name="description" content="Página de login">
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
          <input id="email" name="email" size="35" placeholder="Ex: itallopedro25@gmail.com">
          <span>* <?php echo $emailspan;?></span>
          <br>
          <br>
        </div>
        
        <div> 
          <label for="senha">Senha:</label>
          <br>
          <input type="password" id="senha" name="senha" size="35" placeholder="Ex: 12345" >
          <span>* <?php echo $senhaspan;?></span>
          <br>
          <br>
        </div>
        
        <div class="field radiobox">
          <span>Deseja enviar uma mensagem para a autora do blog?</span>
          <br>
          <br>
          <input type="radio" name="mensagens" id="sim" value="sim" checked>
          <label for="sim">Sim</label>
                    
          <input type="radio" name="mensagens" id="nao" value="nao">
          <label for="nao">Não</label>

          <!--Condição-->
          <?php
          if($_POST['mensagens']=="sim"){
            echo "<br><br><textarea></textarea>";
          }
          ?>

          <br>
          <br>
        </div>

        <button class="botao" type="submit">Fazer login</button>
      </fieldset>
      </form>
    </body>
</html>
