<?php

    $autoload = function($class){
        if($class == 'Email'){
            include('classes/phpmailer/PHPMailerAutoLoad.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/public_html/projeto_site_dinamico/');
?>
