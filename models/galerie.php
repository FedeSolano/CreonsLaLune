<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 18/05/2016
 * Time: 09:50
 */
try {
    $recup_img = $connexion->query("SELECT i.letitre, i.lurl, i.lalt  
FROM images i
WHERE i.id_rubrique = 3;");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$nb = $recup_img->rowCount();
?>
