<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Projeto Site Dinâmico</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do website">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
    
</head>

<body>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">DAST</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div><!--botao-menu-mobile-->
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    

    <footer>
        <div class="center">
            <p>DAST - Todos os direitos reservados.</p>
        </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    
</body>

</html>