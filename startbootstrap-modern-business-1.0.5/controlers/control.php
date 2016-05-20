<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 17/05/2016
 * Time: 16:08
 */
if (empty($_GET)){
    require_once 'models/accueil.php';
    $titre= "Bienvenue chez Créons la Lune";
    require_once 'views/accueil.php';
}elseif(isset($_GET['contact'])){
    require_once 'models/contact.php';
    $titre= "Bienvenue chez Créons la Lune";
    require_once 'views/contact.php';
}elseif(isset($_GET['galerie'])){
    require_once 'models/galerie.php';
    $titre= "Bienvenue chez Créons la Lune";
    require_once 'views/galerie.php';
}else{
    require_once 'views/404.php';
}