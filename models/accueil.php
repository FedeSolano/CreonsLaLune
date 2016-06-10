<?php
/*LES TEXTES DE L'ACCUEIL*/
try {
    $recupText = $connexion->query("SELECT textes.descFR, textes.descNL, textes.descEN  FROM textes
WHERE id_rubrique = 1;");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$text = $recupText->fetchAll(PDO::FETCH_ASSOC);

/*LES TITRES DE L'ACCUEIL*/
try {
    $recupTitres = $connexion->query("SELECT titreFR, titreNL, titreEN  FROM titres
WHERE id_rubrique = 1;");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$titr = $recupTitres->fetchAll(PDO::FETCH_ASSOC);


/*LES IMAGES DE L'ACCUEIL (repris pour l'instant dans la rubrique 3)*/
try {
    $recupImg = $connexion->query("SELECT i.letitre, i.lurl, i.altFR, i.altNL, i.altEN  
FROM images i
WHERE i.id_rubrique = 3 ORDER BY i.id DESC LIMIT 6;");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>