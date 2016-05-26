<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 18/05/2016
 * Time: 09:49
 */
$recup_acc=mysqli_query($mysqli, "Select texte.* from texte INNER JOIN image ON image.id= texte.image_id INNER JOIN langue ON langue.id= texte.langue_id INNER JOIN section ON section.id= texte.section_id INNER JOIN utilisateur ON utilisateur.id= texte.utilisateur_id where texte.section_id=1");
$nb=mysqli_num_rows($recup_acc);