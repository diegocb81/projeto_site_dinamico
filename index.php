<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto Site Dinâmico</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do website">
    <meta name="keywords" content="palavras-chave,do,meu,site">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">Logomarca</div>
            <nav class="desktop">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços/a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços/a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav><!--mobile-->
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!--center-->
    </section><!--banner-principal-->

    <section class="descricao-autor">
        <div class="center">
            <div class="w50">
                <h2>Diego de Castro Barcellos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta. Duis vel aliquet orci. Donec maximus et diam et consectetur. Donec in neque auctor, finibus metus consectetur, ultrices ex. In facilisis volutpat fermentum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta. Duis vel aliquet orci. Donec maximus et diam et consectetur. Donec in neque auctor, finibus metus consectetur, ultrices ex. In facilisis volutpat fermentum.</p>
            </div><!--W50-->
            <div class="w50">
                <img src="img/foto.png" alt="Foto Autor">
            </div><!--W50-->
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="box-especialidade">
                <h3>icone1</h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</p>
            </div><!--box-especialidade-->
            <div class="box-especialidade">
                <h3>icone2</h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</p>
            </div><!--box-especialidade-->
            <div class="box-especialidade">
                <h3>icone3</h3>
                <h3>JavaScript</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</p>
            </div><!--box-especialidade-->
        </div><!--center-->
    </section><!--especialidades-->

    <section class="extras">
        <div class="center">
            <div class="w50">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--w50-->
            <div class="w50">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut euismod nisi vel rhoncus ultrices. Suspendisse condimentum in elit in porta.</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50-->
        </div><!--center-->
    </section><!--extras-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados.</p>
        </div><!--center-->
    </footer>



</body>

</html>