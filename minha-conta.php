<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce DTEC 2024</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
</head>

<body>
<div class="tudao">
        <div class="novoMenu ola">

        <!-- INÍCIO DO CONTEÚDO-->
        <div class="container">

            <!-- INÍCIO NAVEGAÇÃO-->
            <div class="navbar2">

                <div class="logo">
                    <img src="assets/img/logo.jpeg" alt="DESPERTARTEC" width="240px">
                </div>

                <!-- INÍCIO MENU NAVEGAÇÃO -->
                <nav>
                    <ul id="MenuItens">
                        <img src="assets/img/casaIcon.png" alt="" width="16px">             
                        <li><a type="a" class="btn" href="index.php">Início</a></li>
                        <img src="assets/img/bolsaIcon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="produtos.php">Produtos </a></li>
                        <img src="assets/img/sobre_icon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="sobre-nos.php">Sobre </a></li>
                        <!-- Não sei se vamos realmente ter essa página
                        <img src="assets/img/contatosIcon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="#">Contatos </a></li> -->
                        <img src="assets/img/minhaContaicon.png" alt="" width="16px">
                        <li><a type="a" class="btn" href="minha-conta.php">Minha Conta </a></li>
                          
                    </ul>
                </nav>
                <!-- FIM   MENU NAVEGAÇÃO -->

                <a href="carrinho.php" title="">
                <img src="assets/img/carrinho.png" alt="" width="120px" height="120px">
                </a>
                <img src="assets/img/menu.png" alt="" class="menu-celular" onclick="menucelular()">

            </div>
            <!-- FIM NAVEGAÇÃO-->

        </div>
        <!-- FIM DO CONTEÚDO-->
        <hr class="linha-branca">
        <br>
    </div>

<!-- INÍCIO MINHA CONTA-->    

<div class="minha-conta">

    <div class="container">
        <div class="linha">

        <div class="col-2" style="width: 450px;">
    <img src="assets/img/animacao-mulher-login.svg" class="coluna-esquerda-image" alt="" >
</div>


            <div class="col-2">
                <div class="formulario">
                    <div class="btn-form">
                        <span onclick="Entrar()">Entrar</span>
                        <span onclick="Cadastro()">Cadastro</span>
                        <hr id="Indicador">
                    </div>

                    <form action="" method="post" id="EntrarPainel">
                        <!-- <label for="Usuario">Usuário</label> -->
                        <input type="email" name="email" id="" placeholder="E-mail de Acesso">
                        <input type="password" name="senha" id="" placeholder="Digite sua senha">
                        <button type="submit" name="senEntrar" class="btn"> Entrar </button>
                        <a href="" title="">Esqueceu sua senha?</a>
                    </form>

                    <form action="cadastro.php" method="post" id="CadastroSite">
                        <input type="text" name="nome" id="" placeholder="Nome Completo">
                        <input type="email" name="email" id="" placeholder="E-mail de Acesso">
                        <input type="password" name="senha" id="" placeholder="Digite sua senha">
                        <button type="submit" name="sendCad" class="btn"> Cadastrar-se </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!-- FIM MINHA CONTA--> 


    <!-- INÍCIO RODAPÉ-->
    <footer class="rodape">
        <div class="container">
            <div class="linha">

                <div class="rodape-col-1">
                    <h3>Baixe o nosso App</h3>
                    <p>Baixe nosso aplicativo nas melhores plataformas.</p>
                    <div class="app-logo">
                        <img src="assets/img/google.png" alt="">
                        <img src="assets/img/apple.png" alt="">
                    </div>
                </div>

                <div class="rodape-col-2">
                    <!-- <img src="assets/img/logo.jpg" alt=""> -->
                    <p>orem Ipsum is simply dummy text of the </p>
                </div>

                <div class="rodape-col-3">
                    <h3>Mais Informações</h3>
                    <ul>
                        <li>Cupons </li>
                        <li>Blog </li>
                        <li>Política de Privacidade</li>
                        <li>Contatos</li>
                    </ul>
                </div>


                <div class="rodape-col-4">
                    <h3>Redes Sociais</h3>
                    <ul>
                        <li>Facebook </li>
                        <li>Instagram </li>
                        <li>Youtube</li>
                        <li>Twiter</li>
                    </ul>
                </div>

            </div>
            <hr>
            <p class="direitos">
                &#169; Todos os Direitos Reservados. DTEC 2024.
            </p>

        </div>

    </footer>
    <!-- FIM RODAPÉ-->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/login.js"> </script>
</body>

</html>