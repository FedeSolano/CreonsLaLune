<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 17/05/2016
 * Time: 16:08
 */
if (empty($_GET) || isset($_GET['fr']) || isset($_GET['nd']) || isset($_GET['en'])) {
    require_once 'models/accueil.php';
    require_once 'views/accueil.php';}
    elseif (isset($_GET['about'])) {
        require_once 'models/about.php';
        require_once 'views/about.php';
    } elseif (isset($_GET['galerie'])) {
        require_once 'models/galerie.php';
        require_once 'views/galerie.php';
    } elseif (isset($_GET['messagerie'])) {
        require_once 'models/messagerie.php';
        require_once 'views/messagerie.php';
    } elseif (isset($_GET['contact'])) {
        require_once 'models/contact.php';
        require_once 'views/contact.php';
    } elseif (isset($_GET['login'])) {
        require_once 'models/login.php';
        require_once 'views/login.php';
    }
 else {
    require_once 'views/404.php';
}