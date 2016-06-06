<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 17/05/2016
 * Time: 16:06
 */
require_once "config.php";
try {

    // connexion simple grâce à l'interface PDO
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PWD);
    $connexion->exec("SET CHARACTER SET utf8");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(PDOException $e){
    echo "Erreur : ".$e->getMessage()."<br/>";
    echo "Numéro d'erreur : ".$e->getCode();
    exit();
}