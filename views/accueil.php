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




$GrandTitre = $titr[0][$champTitr]; // Attention [0]= id"1", [1]= id"2" ect...
$titre1 = $titr[1][$champTitr];
$texte1 = nl2br($text[0][$champText]);
$titre2 = $titr[2][$champTitr];
$texte2 = nl2br($text[1][$champText]);

?>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-offset-1  col-lg-10 col-lg-offset-1">
            <h1 class="page-header">
                <?= $GrandTitre; ?>
            </h1>
        </div>

        <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
            <?php

            echo "<h2>" . $titre1 . "</h2>";
            echo "<p>" . $texte1 . "</p>";

            ?>
        </div>
        <div class="col-md-offset-1 col-md-10 col-md-offset-1">

            <div class="col-md-12">
                <?php

                echo "<h2>" . $titre2 . "</h2>";
                echo "<p>" . $texte2 . "</p>";

                ?>

            </div>

            <!--A VOIR AVEC CLIENT SI ON METS -->

            <div class="col-md-12">
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i>Just Do it</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae
                                nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda
                                voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i>Just Do It</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae
                                nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda
                                voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i>Just do it</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae
                                nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda
                                voluptatibus eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Nos derniers travaux</h2>
            </div>
            <div class="class-lg-10 text-center">
                <?php
                while ($img = $recupImg->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-4 col-xs-6 thumb">';

                    echo '<a class="thumbnail" href="' . $img['lurl'] . '" data-lightbox="roadtrip" data-title="' . $img['lalt'] . '">';
                    echo '<img class="img-responsive img-hover" src ="' . $img['lurl'] . '" alt = "' . $img['lalt'] . ' data-lightbox="roadtrip" data-title="' . $img['lalt'] . '"" ></a >
            </div >';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Nos partenaires
                </h2>
            </div>
            <marquee width="100%" height="100%"><br><br>

                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">
                <img src="http://placehold.it/200x100" alt="">

            </marquee> 
        </div>
        <!-- /.row -->


        <!-- Footer -->

