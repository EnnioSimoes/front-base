<?php 
header('Content-Type: text/html; charset=utf-8');
$config = array(
    'author'        => 'Ennio Simões',
    'description'   => 'Descrição teste',
    'keywords'   => 'teste, teste, teste',
    'siteUrl'   => 'http://site.com.br',
    'siteName'   => 'Nome do Site',
    'pageTitle'   => 'Título da pagina',
    'userTwitter'   => '@TesteTeste',
    'dataBase'   => array('driver' => 'mysql',
                        'host'	  => 'localhost',
                        'base'	  => 'projeto',
                        'user'    => 'root',
                        'pass'    => ''
                    )
);
$config = (object)$config;

