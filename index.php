<!DOCTYPE html>
    <head>
        <title>The Bridge</title>
        <link rel="stylesheet" href="index.css">
        <link rel="icon" href="Imagens/Bridge.png">
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="tudo">
            <div id="cabecalho">
                <div id="imagem">
                    <img src="Imagens/Bridge.png" alt="Logo" height="200px" width="200px"> 
                </div>

                <div id="banner">
                    <h1 id="slogan">Construindo pontes para a sua imaginação</h1>
                    <img id="coracao" src="Imagens/coracao.png" alt="coracao" height="50px" width="50px"> 
                </div>
            </div>

            <div class="pesquisar">
                <div id="home">
                    <a href="index.php"><img id="home_icon" src="Imagens/home.png" alt="home" height="50px" width="50px"></a>
                </div>

                <div id="barraPesquisa">
                    <form action="">
                        <input id="BarraPesquisa" type="text" placeholder="Busque Aqui">
                        <a href="">
                            <img id="IconeLupaAzul" src="Imagens/loupe-blue.svg" alt="Icone Azul">
                        </a>
                    </form>
            </div>

            <div id="naves">
                <div class="naves">
                    <a href="index.php"><p>Box</p></a>
                </div>

                <div class="naves">
                    <a href="produtoDashBoard.php"><p>Saga</p></a>
                </div>

                <div class="naves">
                    <a href="Login_Cadastro.php"><p>Trilogia</p></a> 
                </div>

                <div class="naves">
                    <a href="Carrinho.php"><p>Duologia</p></a>
                </div>
            </div> 

            <div id="produtos">
                <?php 
                    require "conexao.php";
                    $comando = "SELECT * FROM produto";
                    $resultado = mysqli_query($conexao, $comando);
                
                    while ($produto = mysqli_fetch_assoc($resultado)) : ?>
                    
                    <div id="produto">
                        <div class="produto_index" id="imagemproduto"> 
                            <img src="<?=$produto["imagem"]?>" alt="produto" height="400px" width="400px"> 
                        </div>
                        <div class="produto_index" id="descproduto"> 
                        <a class="redirecionar" href="produtoDetalhes.php?id_produto=<?=$produto["id_produto"]?>"> <p class="p"><?=$produto["descricao"]?></p></a>
                        </div>
                        <div class="produto_index" id="precoproduto"> 
                            <p><?=$produto["preco"]?></p>
                        </div>
                    </div>
                    <?php endwhile ?>
            </div> 

            <div id="rodape">
                <div id="comentarios">
                    <div id="conteudos">
                        <ul class="comentarios">
                            <li><h4>Conteúdos</h4></li>
                            <a class="a" href="https://bridge124.wixsite.com/website-2" target="_blank"><li>Site</li></a>
                            <a class="a" href="https://www.instagram.com/thebridge124/" target="_blank"><li>Instagram</li></a>
                            <a class="a" href="https://www.tiktok.com/@thebridge124" target="_blank"><li>TikTok</li></a>
                            <a class="a" href="https://drive.google.com/drive/folders/1kEQP-wCIazVRkeSQkGDZImiNDZXUCc17" target="_blank"><li>Google Drive</li></a>
                        </ul>
                    </div>
                    <div id="contato">
                        <ul class="comentarios">
                            <li><h4>Contato</h4></li>
                            <li><strong>E-mail:</strong><br>bridge.contato124@gmail.com</li>
                            <li><strong>Telefone:</strong><br>+5515981633103</li>
                        </ul>
                    </div>
                    <div id="pagamento">
                        <ul class="comentarios">
                            <li><h4>Formas de Pagamento</h4></li>
                            <li>Pix</li>
                            <li>Boleto</li>
                            <li>Cartão de Débito</li>
                            <li>Cartão de Crédito</li>
                        </ul>
                    </div>
                </div>
                <div class="direitoseforms">
                    <a class="a" href="https://forms.gle/sU1RZGwhzs2NjXSg8" target="_blank">Envie seus comentários e/ou classifique sua ultima experiência no nosso site.</a>
                </div>
                <div class="direitoseforms">
                    <p> © 2022 The Bridge Todos os direitos reservados.</p>
                </div>
            </div>        
        </div>
    </body>
</html>