

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-offset-1  col-lg-10 col-lg-offset-1">
            <h1 class="page-header">
                <?= $text[1]['titreFR']; ?>
            </h1>
        </div>

                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                    <?php

                        echo "<h2>" . $text[0]['titreFR'] . "</h2>";
                        echo "<p>" . nl2br($text[0]['descFR']) . "</p>";

                    ?>
          </div>
            <div class="col-md-offset-1 col-md-10 col-md-offset-1">

                <div class="col-md-12">
                    <h2>About Modern Business</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique?
                        Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta
                        dolorem non blanditiis ex fugiat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum
                        aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit
                        dolorum!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa
                        voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus
                        perspiciatis quis?</p>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
                            </div>
                            <div class="panel-body">
                                <?php
                                echo 'choricillos';
                                ?>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                                    aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                                    aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                                    aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
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
                while($img = $recupImg->fetch(PDO::FETCH_ASSOC)){
                 echo'<div class="col-md-4 col-sm-6">'  ;
                 echo'<a href="#">';
                 echo'<img class="img-circle img-portfolio img-hover" src="'.$img['lurl'].'" alt='.$img['lalt'].'"">
                </a>
            </div>' ;
            }
            ?>
        </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    <?php

                    echo"Notre clients";

                    ?>  
                 </h2>
             </div>
             <marquee BEHAVIOR="" class="banniere" scrolammount="25"  loop="654" width="75%" height="100%"><br><br>
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

