<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-language" content="pt-br" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo PAGE_TITLE !== '' ? PAGE_TITLE.' | ' . TITLE : TITLE;?></title>

    <!-- CREATE BASE -->
    <base href="<?php echo BASE_URL?>" />

    <!-- BEIGN: META NAME -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Fator Digital - https://www.fatordigital.com.br">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="5 day">
    <meta name="identifier-url" content="">
    <meta name="language" content="Portuguese" />
    <!-- END: META NAME -->

    <!-- BEGIN: GOOGLE+ TAGS -->
    <link rel="author" href="https://plus.google.com/(Google+_Profile)/posts"/>
    <link rel="publisher" href="https://plus.google.com/(Google+_Page_Profile)"/>
    <meta itemprop="name" content="">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="">
    <!-- END: GOOGLE+ TAGS -->

    <!-- BEGIN: TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Conta do Twitter do site (incluindo arroba)">
    <meta name="twitter:title" content="Título da página">
    <meta name="twitter:description" content="Descrição da página. No máximo 200 caracteres">
    <meta name="twitter:creator" content="Conta do Twitter do autor do texto (incluindo arroba)">
    <!-- imagens largas para o Twitter Summary Card precisam ter pelo menos 280x150px -->
    <meta name="twitter:image" content="http://www.example.com/image.jpg">
    <!-- END: TWITTER CARD -->

    <!-- BEGIN: OG TAGS -->
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1260">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">
    <!-- END: OG TAGS -->

    <!-- BEGIN: META TAGS DE GEOLOCALIZACAO -->
    <meta name="geo.region" content="BR-RS" />
    <meta name="geo.placename" content="Porto Alegre" />
    <meta name="geo.position" content="-29.560652;-49.904135" />
    <meta name="ICBM" content="-29.560652, -49.904135" />
    <!-- END: META TAGS DE GEOLOCALIZACAO -->

    <!-- BEGIN: CARREGAMENTO DOS FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL;?>assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo BASE_URL;?>assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL;?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_URL;?>assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL;?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL;?>assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="<?php echo BASE_URL;?>assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#000000">
    <!-- END: CARREGAMENTO DOS FAVICONS -->

    <!-- BEGIN: FONTS -->
    <?php echo css('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap', 'preload'); ?>
    <!-- END: FONTS -->

    <!-- BEGIN: CSS -->
    <?php echo css('assets/css/vendors.min'); ?>
    <?php echo css('assets/css/index.min'); ?>
    <!-- END: CSS -->

    <!-- BEGIN: SCRIPTS -->
    <script>
        var APP_ROOT = '<?php echo BASE_URL;?>';
    </script>
    <!-- END: SCRIPTS -->

</head>
<body>