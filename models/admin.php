<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 7/06/2016
 * Time: 12:55
 */
try {
    $recup_util = $connexion->query("SELECT * FROM utilisateur WHERE lenom='".$_SESSION['lenom']."'");
    

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$nb = $recup_util->rowCount();
?>
