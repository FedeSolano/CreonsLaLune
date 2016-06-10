<?php
session_start();
require_once 'models/config.php';
require_once 'models/db.php';
require_once 'views/header.php';
if(isset($_SESSION[''])){
    $_SESSION['']=$_SESSION['connect'];
}
// si non connecté
if (!isset($_SESSION['clef']) || $_SESSION['clef'] != session_id()) {
// récupération du routeur standard
    require_once "controlers/control.php";
}else{
    // récupération du routeur si connecté
    require_once "controlers/control-connect.php";
}
if(!isset ($_SESSION['connect'])){
require_once "views/footer.php";
}