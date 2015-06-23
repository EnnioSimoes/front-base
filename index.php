<?php include 'head.php'; ?>
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
    <?php include 'footer.php'; ?>
</body>
</html>
