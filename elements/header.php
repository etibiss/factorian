<!doctype html>
<html lang="en-EN">

<head>
    <!-- Informations du site -->
    <meta charset="utf-8">
    <title>Factorian - Concrete5</title>
    <meta name="author" content="Etienne BISSUEL" />
    <meta name="description" content="Maquette de site réalisé sur Concrete5" />
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />

    <!-- Importe de la police Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">

    <!-- Liens CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath();?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath();?>/css/style.css">

    <!-- Liens javascript -->
    <!--<script type="text/javascript" src="<?php echo $view->getThemePath();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $view->getThemePath();?>/js/bootstrap.bundle.min.js"></script>-->

    <?php Loader::element('header_required'); ?>
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <?php
        $a = new GlobalArea('Menu');
        $a->enableGridContainer();
        $a->display($c);
        ?>
            <!--<div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="menu_logo">
                        <a href="index.php">
                            <h1>Factorian</h1>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="barreMenu">
                        <ul class="menuList">
                            <a href="accueil.php">
                                <li>Home</li>
                            </a>
                            <a href="">
                                <li>Produits</li>
                            </a>
                            <a href="">
                                <li>Blog</li>
                            </a>
                            <a href="">
                                <li>Contact</li>
                            </a>
                            <a href="">
                                <li>Plan</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <!-- Ajout de 3 fermetures de div pour réparer un bug du CMS -->
    </div>
    </div>
    </div>
