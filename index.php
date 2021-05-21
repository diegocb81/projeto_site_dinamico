<?php include('config.php');?>
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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/all.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
            echo '<target target="depoimentos" />';
            break;
        
        case 'servicos':
            echo '<target target="servicos" />';
            break;
    }
?>

<?php new Email(); ?>

    <header>
        <div class="center">
            <div class="logo left"><a href="/">DAST</a></div>
            <nav class="desktop right" aria-label="menu">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right" aria-label="menu">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars" aria-hidden="true"></i>
                </div><!--botao-menu-mobile-->
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav><!--mobile-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    
    <?php

        if (file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else {
            //A página não existe.
            if($url != 'depoimentos' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
        
    ?>
    

    <footer <?php if(isset($pagina404) && $pagina404 == true){ echo 'class="fixed"';} ?>>
        <div class="center">
            <p>DAST - Todos os direitos reservados.</p>
        </div><!--center-->
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php 
        if($url == 'home' || $url == ''){
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    <?php
        if($url == 'contato'){
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCZFPyu5iVf1NgMAiCBSfgYWIOtlv8korY"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>

</html>