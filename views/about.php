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



/*
$GrandTitre = $titr[0][$champTitr]; // Attention [0]= id"1", [1]= id"2" ect...
$titre1 = $titr[1][$champTitr];
$texte1 = nl2br($text[0][$champText]);
$titre2 = $titr[2][$champTitr];
$texte2 = nl2br($text[1][$champText]);*/

?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php
                    switch ($i){
                        case("EN"):
                            echo"About Créons la lune";
                            break;
                        case ("NL"):
                            echo "Over Créons la lune";
                            break;
                        default:
                            echo "Sur Créons la lune";
                            break;
                    }
                    ?>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            </div>
            <div class="col-md-6">
                <h2><?php
                    switch ($i){
                        case("EN"):
                            echo"What do we do?";
                            break;
                        case ("NL"):
                            echo "Wat Créons la Lune doet?";
                            break;
                        default:
                            echo "Qu'est-ce qu'on fait?";
                            break;
                    }
                    ?></h2>
                <?php
                if(isset ($_GET['about']) && isset ($_GET['nd']))
                echo'test ND';
                ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
        </div>


        <!-- Our Customers -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Customers</h2>
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
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
            </div>
        </div>
        <!-- /.row -->


