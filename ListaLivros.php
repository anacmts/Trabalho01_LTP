<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Os 14 livros mais vendidos de 2021</title>
        
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="lista.css" media="screen">

        <meta charset="UTF-8">
        <meta name="description" content="A lista dos 21 livros vendidos de 2021, separados por gênero.">
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

        <div class="c1">
            <p>Lista dos livros mais vendidos de 2021 de acordo com o gênero:</p>
        </div>

        <div class="c1">
            <h2>Clássicos literários</h2>
        </div>

        <h3>A Revolução dos Bichos</h3>

        <p>
            <figure>
                <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-a-revolucao-dos-bichos.jpg" alt="Capa do livro" width="208" height="321">
            </figure>
        </p>

        <p><b>Autor: </b>George Orwell</p>
                
        <p><b>Páginas: </b>152</p>

        <p><a href="https://www.amazon.com.br/revolu%C3%A7%C3%A3o-dos-bichos-conto-fadas/dp/8535909559/ref=sr_1_3?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=IJ8YAOK4ZN4F&keywords=A+Revolu%C3%A7%C3%A3o+dos+bichos&qid=1651490349&sprefix=a+revolu%C3%A7%C3%A3ao+dos+bichos%2Caps%2C310&sr=8-3" target="_blank"><b>Compre na Amazon</b></a></p>

        <p>
            <b>Sinopse:</b>
            Escrita em plena Segunda Guerra Mundial e publicada em 1945 depois de ter sido rejeitada por várias editoras, 
            <br>essa pequena narrativa causou desconforto ao satirizar ferozmente a ditadura stalinista numa época em que os soviéticos 
            <br>ainda eram aliados do Ocidente na luta contra o eixo nazifascista.
        </p>
        <br>

        <h3>Orgulho e Preconceito</h3>
            
        <p>
            <figure>
                <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-orgulho-e-preconceito.jpg" alt="Capa do livro" width="208" height="321">
            </figure>
        </p>

        <p><b>Autor: </b>Jane Austen</p>
                
        <p><b>Páginas: </b>385</p>

        <p><a href="https://www.amazon.com.br/Orgulho-Preconceito-Jane-Austen/dp/8544001823/ref=sr_1_1?keywords=orgulho+e+preconceito&qid=1651490393&sprefix=Orgulho+e+%2Caps%2C270&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>

        <p>
            <b>Sinopse:</b>
            Austen nos apresenta Elizabeth Bennet como heroína irresistível e seu pretendente aristocrático, 
            <br>o sr. Darcy. Nesse livro, aspectos diferentes são abordados: orgulho encontra preconceito, ascendência social 
            <br>confronta desprezo social, equívocos e julgamentos antecipados conduzem alguns personagens ao sofrimento e ao escândalo.
        </p>
        <br>
        
        <div class="c1">
            <h2>Romance</h2>
        </div>

            <h3>Amor & Gelato</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-livro-amor-e-gelato.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>

            <p><b>Autora: </b>Jenna Evans Welch</p>

            <p><b>Páginas: </b>320</p>

            <p><a href="https://www.amazon.com.br/Amor-Gelato-Jenna-Evans-Welch/dp/8551002341/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=WPROMRRDUNBS&keywords=amor+e+gelato&qid=1651494748&sprefix=amor+e+gelato%2Caps%2C289&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse: </b>
                Depois da morte da mãe, Lina fica com a missão de realizar um último pedido: ir até a Itália para conhecer o 
                <br>pai. Do dia para a noite, ela se vê na famosa paisagem da Toscana, morando em uma casa localizada no 
                <br>mesmo terreno de um cemitério memorial de soldados americanos da Segunda Guerra Mundial, com um 
                <br>homem que nunca tinha ouvido falar. Apesar das belezas arquitetônicas, da história da cidade e das 
                <br>comidas maravilhosas, o que Lina mais quer é ir embora correndo dali.
            </p>

        <br>
        
            <h3>Os Sete Maridos de Evelyn Hugo</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-livro-sete-maridos-evelyn-hugo.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>    

            <p><b>Autora: </b>Taylor Jenkins Reid</p>
                
            <p><b>Páginas: </b>360</p>

            <p><a href="https://www.amazon.com.br/Os-sete-maridos-Evelyn-Hugo/dp/8584391509/ref=sr_1_1?keywords=os+sete+maridos+de+evelyn+hugo&qid=1651495245&sprefix=os+sete+maridos+de+%2Caps%2C286&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Lendária estrela de Hollywood, Evelyn Hugo sempre esteve sob os holofotes ― seja estrelando uma 
                <br>produção vencedora do Oscar, protagonizando algum escândalo ou aparecendo com um novo marido… 
                <br>pela sétima vez. Agora, prestes a completar oitenta anos e reclusa em seu apartamento no Upper East Side, 
                <br>a famigerada atriz decide contar a própria história ― ou sua “verdadeira história” ―, mas com uma 
                <br>condição: que Monique Grant, jornalista iniciante e até então desconhecida, seja a entrevistadora. 
                <br>Ao embarcar nessa misteriosa empreitada, a jovem repórter começa a se dar conta de que nada é por 
                <br>acaso ― e que suas trajetórias podem estar profunda e irreversivelmente conectadas.
            </p>

        <br>

        <div class="c1">
            <h2>Populares de 2020</h2>
        </div>
            <h3>A Garota do Lago</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/livro-a-garota-do-lago.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autor: </b>Charlie Donlea</p>
                
            <p><b>Páginas: </b>296</p>

            <p><a href="https://www.amazon.com.br/Garota-do-Lago-Charlie-Donlea/dp/856240988X/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1HQD1Y7VQRJ0E&keywords=a+garota+do+lago&qid=1651538848&sprefix=a+garota+do+lago%2Caps%2C340&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Summit Lake, uma pequena cidade entre montanhas, é esse tipo de lugar, bucólico e com encantadoras casas 
                <br>dispostas à beira de um longo trecho de água intocada. Duas semanas atrás, a estudante de direito 
                <br>Becca Eckersley foi brutalmente assassinada em uma dessas casas. Filha de um poderoso advogado, 
                <br>Becca estava no auge de sua vida. Era trabalhadora, realizada na vida pessoal e tinha um futuro promissor. 
                <br>Para grande parte dos colegas, era a pessoa mais gentil que conheciam. Agora, enquanto os habitantes, 
                <br>chocados, reúnem-se para compartilhar suas suspeitas, a polícia não possui nenhuma pista relevante.
                <br>Atraída instintivamente pela notícia, a repórter Kelsey Castle vai até a cidade para investigar o caso.
            </p>

        <br>

            <h3>Torto Arado</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-livro-torto-arado.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autor: </b>Itamar Vieira Junior</p>
                
            <p><b>Páginas: </b>264</p>

            <p><a href="https://www.amazon.com.br/Torto-arado-Itamar-Vieira-Junior/dp/6580309318/ref=sr_1_2?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1E4TZ3PULBT4W&keywords=torto+arado&qid=1651538936&sprefix=torto+arado%2Caps%2C276&sr=8-2&ufe=app_do%3Aamzn1.fos.6a09f7ec-d911-4889-ad70-de8dd83c8a74" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Nas profundezas do sertão baiano, as irmãs Bibiana e Belonísia encontram uma velha e misteriosa 
                <br>faca na mala guardada sob a cama da avó. Ocorre então um acidente. E para sempre suas vidas estarão 
                <br>ligadas, a ponto de uma precisar ser a voz da outra. Numa trama conduzida com maestria e com uma 
                <br>prosa melodiosa, o romance conta uma história de vida e morte, de combate e redenção. Um texto épico
                <br> e lírico, realista e mágico que revela, para além de sua trama, um poderoso elemento de insubordinação
                <br>social.
            </p>

        <br>
        
        <div class="c1">
            <h2>Livros que viraram adaptações</h2>
        </div>
            <h3>O Duque e Eu</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-livro-o-duque-eu.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autora: </b>Julia Quinn</p>
                
            <p><b>Páginas: </b>288</p>

            <p><a href="https://www.amazon.com.br/duque-eu-Julia-Quinn/dp/8580411467/ref=tmm_pap_swatch_0?_encoding=UTF8&qid=1651538987&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Simon Basset, o irresistível duque de Hastings, acaba de retornar a Londres depois de seis anos viajando 
                <br>pelo mundo. Rico, bonito e solteiro, ele é um prato cheio para as mães da alta sociedade, que só 
                <br>pensam em arrumar um bom partido para suas filhas. Simon, porém, tem o firme propósito de nunca se 
                <br>casar. Assim, para se livrar das garras dessas mulheres, precisa de um plano infalível. É quando entra 
                <br>em cena Daphne Bridgerton, a irmã mais nova de seu melhor amigo.
            </p>

        <br>

            <h3>Duna</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/livro-duna-frank-herbert.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autor: </b>Frank Herbert</p>
                
            <p><b>Páginas: </b>680</p>

            <p><a href="https://www.amazon.com.br/Duna-com-Sobrecapa-P%C3%B4ster-Filme/dp/6586064694/ref=tmm_other_meta_binding_swatch_0?_encoding=UTF8&qid=1651539020&sr=8-2" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                A vida do jovem Paul Atreides está prestes a mudar radicalmente. Após a visita de uma mulher misteriosa, 
                <br>ele é obrigado a deixar seu planeta natal para sobreviver ao ambiente árido e severo de Arrakis, o 
                <br>Planeta Deserto. Envolvido numa intrincada teia política e religiosa, Paul divide-se entre as 
                <br>obrigações de herdeiro e seu treinamento nas doutrinas secretas de uma antiga irmandade, que vê nele 
                <br>a esperança de realização de um plano urdido há séculos.
            </p>

        <br>

        <div class="c1">
            <h2>Lançamentos</h2>
        </div>

            <h3>Malibu Renasce</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-malibu-renasce.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autora: </b>Taylor Jenkins Reid</p>
                
            <p><b>Páginas: </b>360</p>

            <p><a href="https://www.amazon.com.br/Malibu-renasce-Taylor-Jenkins-Reid/dp/8584392165/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=36C666IHHUGUB&keywords=malibu+renasce&qid=1651539108&sprefix=malibu+re%2Caps%2C1235&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Malibu, agosto de 1983. É o dia da festa anual de Nina Riva, e todos anseiam pelo cair da noite e por toda 
                <br>a emoção que ela promete trazer. A pessoa menos interessada no evento é Nina, que nunca gostou de ser o 
                <br>centro das atenções e acabou de ter o fim do relacionamento com um tenista profissional totalmente 
                <br>explorado pela mídia. Talvez Hud também esteja tenso, pois precisa admitir para o irmão algo que tem mantido 
                <br>em segredo por tempo demais, e parece que esse é o momento. Jay está contando os minutos, pois não vê a hora 
                <br>de encontrar uma menina que não sai de sua cabeça. E Kit também tem seus segredos ― e convidado ― especiais.
            </p>

        <br>

            <h3>A Vida Invisível de Addie LaRue</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-vida-invisivel-de-addie-larue.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autora: </b>V. E. Schwab</p>
                
            <p><b>Páginas: </b>504</p>

            <p><a href="https://www.amazon.com.br/vida-invis%C3%ADvel-Addie-LaRue/dp/6555872551/ref=sr_1_1?crid=3FGCR40VKE3UT&keywords=a+vida+invis%C3%ADvel+de+addie+larue&qid=1651539147&sprefix=a+vida+invis%C3%ADvel+de+add%2Caps%2C294&sr=8-1&ufe=app_do%3Aamzn1.fos.6a09f7ec-d911-4889-ad70-de8dd83c8a74" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                França: 1714. Addie LaRue não queria pertercer a ninguém ou a lugar nenhum. Em um momento de desespero, 
                <br>a jovem faz um pacto: a vida eterna, sob a condição de ser esquecida por quem a conhecer. Um piscar 
                <br>de olhos, e, como um sopro, Addie se vai. Uma virada de costas, e sua existência se dissipa na memória 
                <br>de todos. Após tanto tempo vivendo uma existência deslumbrante, aproveitando a vida de todas as formas, 
                <br>fazendo uso de tantos artifícios quanto fosse possível e viajando pelo tempo e espaço, através dos séculos 
                <br>e continentes, da história e da arte, Addie entende seus limites e descobre — apesar de fadada ao esquecimento — 
                <br>até onde é capaz de ir para deixar sua marca no mundo.
            </p>

        <br>

        <br>

        <div class="c1">
            <h2>Suspenses</h2>
        </div>

            <h3>A Paciente Silenciosa</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/a-paciente-silenciosa.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autor: </b>Alex Michaelides</p>
                
            <p><b>Páginas: </b>368</p>

            <p><a href="https://www.amazon.com.br/paciente-silenciosa-Alex-Michaelides/dp/8501116432/ref=sr_1_1?keywords=a+paciente+silenciosa&qid=1651539210&sprefix=a+paciente%2Caps%2C363&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Alicia Berenson tinha uma vida perfeita. Ela era uma pintora famosa casada com um fotógrafo bem-sucedido e morava numa área nobre 
                <br>de Londres que dá para o parque de Hampstead Heath. Certa noite, Gabriel, seu marido, voltou tarde para casa depois de um ensaio 
                <br>para uma revista de moda e, de repente, a vida de Alicia mudou completamente. Alicia tinha 33 anos quando deu cinco tiros no rosto 
                <br>do marido. Depois disso, nunca mais disse uma palavra.
            </p>

        <br>


            <h3>Mentirosos</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-livro-mentirosos.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>

            <p><b>Autor: </b>E. Lockhart</p>

            <p><b>Páginas: </b>272</p>

            <p><a href="https://www.amazon.com.br/Mentirosos-Lockhart/dp/8565765482/ref=sr_1_5?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1BPYM2WPJF8VB&keywords=mentirosos&qid=1651539262&sprefix=mentirosos%2Caps%2C292&sr=8-5" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Os Sinclair são uma família rica e renomada, que se recusa a admitir que está em decadência e se agarra a todo custo às tradições. 
                <br>Assim, todo ano o patriarca, suas três filhas e seus respectivos filhos passam as férias de verão em sua ilha particular. 
                <br>Cadence - neta primogênita e principal herdeira -, seus primos Johnny e Mirren e o amigo Gat são inseparáveis desde pequenos, 
                <br>e juntos formam um grupo chamado Mentirosos. Durante o verão de seus quinze anos, as férias idílicas de Cadence são interrompidas 
                <br>quando a garota sofre um estranho acidente.
            </p>

        <br>

        <div class="c1">
            <h2>Não-ficção e autodesenvolvimento</h2>
        </div>

            <h3>Mulheres que correm com os lobos</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/livro-mulheres-que-correm-com-os-lobos.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autora: </b>Clarissa Pinkola Estés</p>
                
            <p><b>Páginas: </b>576</p>

            <p><a href="https://www.amazon.com.br/Mulheres-que-Correm-com-Lobos/dp/853252978X/ref=sr_1_1?crid=1548QJ3WAH4EW&keywords=mulheres+que+correm+com+lobos&qid=1651539284&sprefix=mulheres%2Caps%2C435&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Os lobos foram pintados com um pincel negro nos contos de fada e até hoje assustam meninas indefesas. Mas nem sempre eles foram 
                <br>vistos como criaturas terríveis e violentas. Na Grécia antiga e em Roma, o animal era o consorte de Artemis, a caçadora, e 
                <br>carinhosamente amamentava os heróis. A analista junguiana Clarissa Pinkola Estés acredita que na nossa sociedade as mulheres 
                <br>vêm sendo tratadas de uma forma semelhante. Ao investigar o esmagamento da natureza instintiva feminina, Clarissa descobriu a 
                <br>chave da sensação de impotência da mulher moderna.
            </p>

        <br>

            <h3>Segredos da mente milionária</h3>
            
            <p>
                <figure>
                    <img src="https://www.amorporlivros.com.br/wp-content/uploads/capa-segredos-da-mente-milionaria.jpg" alt="Capa do livro" width="208" height="321">
                </figure>
            </p>
                
            <p><b>Autor: </b>Charles Duhigg</p>
                
            <p><b>Páginas: </b>408</p>

            <p><a href="https://www.amazon.com.br/segredos-mente-milion%C3%A1ria-Harv-Eker/dp/8575422391/ref=sr_1_1?crid=3RW6PXUX94IGO&keywords=os+segredos+da+mente+milion%C3%A1ria&qid=1651539305&sprefix=os+segredos%2Caps%2C349&sr=8-1" target="_blank"><b>Compre na Amazon</b></a></p>
            
            <p>
                <b>Sinopse:</b>
                Se as suas finanças andam na corda bamba, talvez esteja na hora de você refletir sobre o que T. Harv Eker chama de "o seu modelo de 
                <br>dinheiro" - um conjunto de crenças que cada um de nós alimenta desde a infância e que molda o nosso destino financeiro, quase 
                <br>sempre nos levando para uma situação difícil. Neste livro, Eker mostra como substituir uma mentalidade destrutiva - que você 
                <br>talvez nem perceba que tem - pelos "arquivos de riqueza", 17 modos de pensar e agir que distinguem os ricos das demais pessoas.
            </p>
    </body>
</html>
