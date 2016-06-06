<?php
/*LES TEXTES ET LES TITRES DE L'ACCUEIL*/
try {
    $recupText = $connexion->query("SELECT textes.descFR, textes.descNL, textes.descEN, t.titreFR, t.titreNL, t.titreEN  FROM textes
INNER JOIN titres t 
ON t.id_rubrique = 1
WHERE textes.id_rubrique = 1;");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$text = $recupText->fetchAll(PDO::FETCH_ASSOC);



/*LES IMAGES DE L'ACCUEIL*/
try {
    $recupImg = $connexion->query("SELECT i.letitre, i.lurl, i.lalt  
FROM images i
WHERE i.id_rubrique = 3 ORDER BY i.id DESC LIMIT 6;");

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>