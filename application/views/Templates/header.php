<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/bootstrap.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/font-awesome.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/elegant-icons.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/owl.carousel.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/slicknav.min.css"); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo site_url("assets/css/style.css"); ?>" type="text/css">
    <title>Accueil</title>
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                        <div class="header__humberger">
                            <h4>User : <?php foreach($data2 as $d) echo $d['nom']; ?></h4>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xs-8 tete">
                        <div class="row">
                            <div class="col-lg-3 col-xs-3"><a href="<?php echo site_url("index.php/welcome/accueil"); ?>">Home</a></div>
                            <div class="col-lg-3 col-xs-3"><a href="<?php echo site_url("index.php/InsertObjets/index"); ?>">Inserer Objet</a> </div>
                            <div class="col-lg-3 col-xs-3"><a href="<?php echo site_url("index.php/echange/demande"); ?>">Demande</a></div>
                            <div class="col-lg-3 col-xs-3"><a href="<?php echo site_url("index.php/welcome/deconnecter"); ?>">Deconnexion</a></div>
                       </div>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="height: 150px;">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        <a href="./signin.html" class="primary-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo site_url('assets/img/takalo1.png'); ?>" style="width: 400px;" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->