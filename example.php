<?php include 'bootstrap.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Core Meta Data -->
        <meta name="author" content="<?= $config->author; ?>">
        <meta name="description" content="<?= $config->description; ?>">
        <meta name="keywords" content="<?= $config->keywords; ?>">

        <!-- Facebook Tags -->
        <meta property="og:description" content="<?= $config->description; ?>">
        <meta property="og:image" content="<?= $config->siteUrl; ?>/avatar_face.png">
        <meta property="og:site_name" content="<?= $config->siteName; ?>">
        <meta property="og:title" content="<?= $config->pageTitle; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>">

        <!-- Twitter tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?= $config->siteUrl; ?>">
        <meta name="twitter:creator" content="<?= $config->userTwitter; ?>">
        <meta name="twitter:title" content="<?= $config->pageTitle; ?>">
        <meta name="twitter:description" content="<?= $config->description; ?>">
        <meta name="twitter:image" content="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>/avatar_face.png">

        <!-- Humans -->
        <link rel="author" href="humans.txt" />

        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">
        <link rel="shortcut icon" href="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>/favicon.png" type="image/png"> <!-- link absoluto do favicon -->

        <!-- Aplique os CSS em css.php -->
        <?php include 'css.php'; ?>

        <meta charset="UTF-8">
        <title>Front-Base</title>
    </head> 

    <body>
        <!--[if lt IE 7]>
        <div class="cf-msn"><p class="chromeframe">Você está usando um navegador <strong>desatualizado</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</a> para melhorar a sua experiência.</p></div>
        <![endif]-->
        <div class="container">	
            <header>
                <br />
                <br />
                <br />
                <br />
                <div class="banner-home">
                    <div><img src="http://placehold.it/300x200"></div>
                    <div><img src="http://placehold.it/300x200"></div>
                    <div><img src="http://placehold.it/300x200"></div>
                    <div><img src="http://placehold.it/300x200"></div>
                    <div><img src="http://placehold.it/300x200"></div>
                    <div><img src="http://placehold.it/300x200"></div>
                    <div><img src="http://placehold.it/300x200"></div>
                </div>
                <menu>
                    <ul>
                        <li>teste</li>
                        <li>teste</li>
                        <li>teste</li>
                        <li>teste</li>
                    </ul>
                </menu>
            </header><!-- end header-->
            <div id="content"> 
                <pre>
                <h1 rel="bookmark">Definições para head em config.php <span class="small">Caso precise...</span></h1>
                    <?php
                    $config->author = 'teste';
                    print_r($config);
                    ?> 
            <p class="wow bounceInRight animated" data-wow-duration="5s">Se quiser fazer uma firula igual a essa você ja tem o Animate.css, para conhecer mais animações clique <a href="https://github.com/daneden/animate.css" target="_blank">AQUI</a> para controlar os tempo das animações use WOW.js <a href="https://github.com/matthieua/WOW" target="_blank">LINK AQUI</a></p>
            <h2>Tecnologias</h2>
            <ul>
                <li>Bootstrap v3.3.1</li>
                <li>jQuery v1.11.2</li>
                <li>Modernizr 2.8.3</li>
                <li>WOW - v1.1.2</li>
                <li>Animate</li>
                <li>Slick Version: 1.5.0</li>
                <li>Font Awesome 4.3.0</li>
            </ul>
            <h3>Abra o index.php apague esse lixo em .content e saia escrevendo!!!</h3>
                </pre>
            </div><!-- end content-->
        </div><!-- end container-->
        <footer>

        </footer><!-- end footer-->

        <script type="text/javascript" src="assets/js/all.js"></script>
        <script type="text/javascript" src="assets/slick/slick.min.js"></script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
            (function (d, t) {
                var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                g.src = '//www.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g, s)
            }(document, 'script'));
        </script>

    </body>
</html>
