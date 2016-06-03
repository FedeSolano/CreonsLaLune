<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 18/05/2016
 * Time: 09:50
 */
$recup_img = $connexion->query("SELECT image.* FROM image INNER JOIN section ON image.section_id=section.id Where section_id=2");
$nb= $recup_img->rowCount();