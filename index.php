<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 17/05/2016
 * Time: 16:06
 */
require_once 'models/config.php';
require_once 'models/db.php';
// si non connecté
if (!isset($_SESSION['clef']) || $_SESSION['clef'] != session_id()) {
    // variable permettant d'éviter de refaire la vérification ailleurs dans le code
    $connect = false;
// récupération du routeur standard
    require_once "controlers/control.php";
}else{
    // variable permettant d'éviter de refaire la vérification ailleurs dans le code
    $connect = true;
    // récupération du routeur si connecté
    require_once "controlers/control-connect.php";
}