<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Créons la Lune</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#show").click(function () {
                $("#formmail1").slideToggle("slow");
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#show2").click(function () {
                $("#formmail2").slideToggle("slow");
            });
        });
    </script>
    <style>
        .formmail1 {
            display: none;
        }

        /*header{
            margin-top:-20px;
        }*/</style>
</head>

<body>


<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="row">
            <div class="col-xs-12">
                <div class="item active">
                <?php                                               // Pour le header cliquable si langue retour accueil


                    $h = "./";
                    switch ($h) {
                        case isset($_GET['fr']):
                            $_SESSION["lang"] = "FR";// default session
                            $h = "./?fr";
                            break;
                        case isset($_GET['en']):
                            $_SESSION["lang"] = "EN";
                            $h = "./?en";
                            break;
                        case isset($_GET['nd']):
                            $_SESSION["lang"] = "NL";
                            $h = "./?nd";
                            break;
                    }
                    ?>
                    <a href="<?=$h?>">
                        <img src="datas/images/caqui.jpg" alt="logo" class=" hidden-sm hidden-xs img-responsive"/>
                        <img src="datas/images/caqui2.png" alt="logo"
                             class=" hidden-xl hidden-lg hidden-md img-responsive"/>
                </div>
                </a>
            </div>
        </div>

    </div>


    <!-- Controls -->

</header>

<!-- Navigation -->
<?php
$champQSN = "Qui sommes-nous?";
$champGAL = "Galerie";
$champMESS = "Messagerie";
$champCON = "Contact";
$champLANG = "Langue";
if(!isset($_SESSION[''])){
$n = $_SESSION["lang"];                                                         // Les variables de la NAVIGATION

switch ($n) {
    case ("EN"):

        $champQSN = "About us";
        $champGAL = "Galery";
        $champMESS = "Message";
        $champCON = "Contact";
        $champLANG = "Language";
        break;
    case ("NL"):

        $champQSN = "Over ons";
        $champGAL = "Galerij";
        $champMESS = "Messagerie";
        $champCON = "Contact";
        $champLANG = "Taal";
        break;
}
}
?>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="?about"><?= $champQSN ?></a>
                </li>
                <li>
                    <a href="?galerie"><?= $champGAL ?></a>
                </li>
                <li>
                    <a href="?messagerie"><?= $champMESS ?></a>
                </li>
                <li>
                    <a href="?contact"><?= $champCON ?></a>
                </li>
            </ul>
            <ul class="navl">
                <?php

                if (isset($_SESSION['connect'])){
                //ON METTRA BIENVENU ADMINISTRATION PAGE ACCUEIL
                echo'<li class="dropdown">
                    <a href="?deconnexion">Déconnexion</a>
                </li>';
                }else{
                    echo'<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$champLANG.'<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?fr">Français</a>
                        </li>
                        <li>
                            <a href="?en">English</a>
                        </li>
                        <li>
                            <a href="?nd">Nederlands</a>
                        </li>
                    </ul>
                </li>';
                }?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
