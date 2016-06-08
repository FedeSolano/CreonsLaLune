<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 7/06/2016
 * Time: 12:36

*/
if(isset($_POST['lenom'])){
    $lenom = htmlspecialchars(strip_tags(trim($_POST['lenom'])),ENT_QUOTES);
    $lepass = htmlspecialchars(strip_tags(trim($_POST['lepass'])),ENT_QUOTES);
    $prepare = $connexion->prepare("SELECT u.id AS idutil, u.* FROM utilisateur u WHERE  lenom=:lenom AND lepass=:lepass;");

    $prepare->bindValue(":lenom",$lenom,PDO::PARAM_STR);
    $prepare->bindValue(":lepass",$lepass,PDO::PARAM_STR);
    $prepare->execute();

    $nb=$prepare->rowCount();

    // si on a un résultat (1)
    if($nb){

        // on met le résultat dans un tableau associatif
        $util=$prepare->fetch(PDO::FETCH_ASSOC);
        // on ouvre la connexion à la session
        $_SESSION["clef"]= session_id();
        // on y rajoute les infos importantes
        $_SESSION["lenom"]= $util['lenom'];
        $_SESSION["lemail"]= $util['lemail'];
        $_SESSION["idutil"]= $util['idutil'];

        // redirection vers l'accueil
        header("Location: ./");

    }else{

    }
}else{



}