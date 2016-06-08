<?php

//Langues
$i = $_GET;
switch ($i) {
    case isset($_GET['fr']):
        $champTitr = "titreFR";
        $champText = "descFR";
        break;
    case isset($_GET['en']):
        $champTitr = "titreEN";
        $champText = "descEN";
        break;
    case isset($_GET['nd']):
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
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-check"></i> Just Do It</h4>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo 'choricillos';
                            ?>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae
                                nulla
                                aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda
                                voluptatibus
                                eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae
                                nulla
                                aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda
                                voluptatibus
                                eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae
                                nulla
                                aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda
                                voluptatibus
                                eveniet incidunt dicta nostrum quod?</p>
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Notre derniers travaux</h2>
            </div>
            <div class="class-lg-10 text-center">
                <?php
                while ($img = $recupImg->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-4 col-xs-6 thumb">';

                    echo '<a class="thumbnail" href="'.$img['lurl'].'" data-lightbox="roadtrip" data-title="'.$img['lalt'].'">';
                    echo '<img class="img-responsive img-hover" src ="'.$img['lurl'].'" alt = "'.$img['lalt'].' data-lightbox="roadtrip" data-title="'.$img['lalt'].'"" ></a >
            </div >';
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    <?php

                    echo "Nos clients";

                    ?>
                </h2>
            </div>
            <marquee BEHAVIOR="" class="banniere" scrolammount="25" loop="654" width="75%" height="100%"><br><br>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>


            </marquee>
        </div>
        <!-- /.row -->


        <!-- Footer -->

