<?php
$champTitr = "titreFR";
$champText = "descFR";
//Langues
$i = $_SESSION["lang"];
switch ($i) {
    case ("EN"):
        $champTitr = "titreEN";
        $champText = "descEN";
        break;
    case ("NL"):
        $champTitr = "titreNL";
        $champText = "descNL";
        break;
}
?>
<!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php
                    switch ($i){
                        case("EN"):
                            echo"Creations gallery";
                            break;
                        case ("NL"):
                            echo "Galerij van onze werk";
                            break;
                        default:
                            echo "Galerie de nos créations";
                            break;
                    }
                    ?>
                </h1>
            </div>
            <?php
            $recup_img ->execute();
            if (empty($nb)){
                echo"Il n'y a pas d'images ";
            }else {
                while($img =$recup_img->fetch(PDO::FETCH_ASSOC)){
                echo '<div class="col-md-4 col-xs-6 thumb">';
                echo ' <a class="thumbnail" href="#">';
                echo '<img class="img-responsive" src ="'.$img['lurl'].'" alt = "'.$img['lalt'].'" ></a >
            </div >';

                }
            }

            ?>
           
        </div>



