<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 18/05/2016
 * Time: 09:49
 */

/*$recup_acc_en=mysqli_query($mysqli, "Select texte.* from texte INNER JOIN image ON image.id= texte.image_id INNER JOIN langue ON langue.id= texte.langue_id INNER JOIN section ON section.id= texte.section_id INNER JOIN utilisateur ON utilisateur.id= texte.utilisateur_id where texte.section_id=1 and texte.langue_id=2");
$nb2=mysqli_num_rows($recup_acc_en);
$recup_acc_nd=mysqli_query($mysqli, "Select texte.* from texte INNER JOIN image ON image.id= texte.image_id INNER JOIN langue ON langue.id= texte.langue_id INNER JOIN section ON section.id= texte.section_id INNER JOIN utilisateur ON utilisateur.id= texte.utilisateur_id where texte.section_id=1 and texte.langue_id=3");
$nb3=mysqli_num_rows($recup_acc_nd);*/
$recup_acc_fr = $connexion->query("Select texte.* from texte INNER JOIN image ON image.id= texte.image_id INNER JOIN langue ON langue.id= texte.langue_id INNER JOIN section ON section.id= texte.section_id INNER JOIN utilisateur ON utilisateur.id= texte.utilisateur_id where texte.section_id=1 and texte.langue_id=1");
$nb= $recup_acc_fr->rowCount();
