<?php include 'bootstrap.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Core Meta Data -->
        <meta name="author" content="<?=$config->author; ?>">
        <meta name="description" content="<?=$config->description; ?>">
        <meta name="keywords" content="<?=$config->keywords; ?>">

        <!-- Facebook Tags -->
        <meta property="og:description" content="<?=$config->description; ?>">
        <meta property="og:image" content="<?=$config->siteUrl; ?>/avatar_face.png">
        <meta property="og:site_name" content="<?=$config->siteName; ?>">
        <meta property="og:title" content="<?=$config->pageTitle; ?>">
        <meta property="og:type" content="website">
        <meta property="og:url" content="<?= 'http://' . $_SERVER["SERVER_NAME"] ?>">

        <!-- Twitter tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?=$config->siteUrl; ?>">
        <meta name="twitter:creator" content="<?=$config->userTwitter; ?>">
        <meta name="twitter:title" content="<?=$config->pageTitle; ?>">
        <meta name="twitter:description" content="<?=$config->description; ?>">
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
