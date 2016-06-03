<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">Créons la Lune&nbsp;&nbsp;<i class="fa fa-moon-o"></i></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="?about">Qui sommes-nous?</a>
                </li>
                <li>
                    <a href="?galerie">Galerie</a>
                </li>
                <li>
                    <a href="?contact">Contact</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Langue<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="?fr">Français</a>
                        </li>
                        <li>
                            <a href="?en">English</a>
                        </li>
                        <li>
                            <a href="?nd">Nederlands</a>
                        </li>


                    </ul>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->



    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="row">
            <div class="col-xs-12">
                <div class="item active">
                    <img src="datas/images/caqui.jpg" alt="" class="img-responsive"/>


                    <div class="carousel-caption">

                    </div>

                </div>
            </div>
        </div>

            </div>


    <!-- Controls -->

</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-offset-1  col-lg-10 col-lg-offset-1">
            <h1 class="page-header">
                <?php
                if(isset ($_GET['fr'])){
                    echo "";
                }elseif(isset ($_GET['nd'])){
                    echo "";
                }elseif(isset ($_GET['es'])){
                    echo "";
                }else{
                    echo" Bienvenu à Créons la Lune";}

                ?>
            </h1>
        </div>

                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                    <?php
                    $recup_acc_fr->execute();
                        if (empty($nb)) {
                            echo "tomatillos";
                        } else {
                            while ($accueil = $recup_acc_fr->fetch(PDO::FETCH_ASSOC)) {
                                echo "<h2>" . $accueil['titre'] . "</h2>";
                                echo "<p>" . nl2br($accueil['ladesc']) . "</p>";
                            }
                            echo "<p>" . nl2br($accueil['ladesc']) . "</p>";
                        }



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
            <?php
            $recup_acc_img->execute();
            if(empty($nb2)){
                echo"somos vagos y no trabajamos";
            }else{
                while($lesimg= $recup_acc_img->fetch(PDO::FETCH_ASSOC)){
                 echo'<div class="col-md-4 col-sm-6">'  ;
                 echo'<a href="#">';
                 echo'<img class="img-circle img-portfolio img-hover" src="'.$lesimg['lurl'].'" alt='.$lesimg['lalt'].'"">
                </a>
            </div>' ;
                }
            }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    <?php
                    if(isset ($_GET['fr'])){
                    echo "";
                    }elseif(isset ($_GET['nd'])){
                    echo "";
                    }elseif(isset ($_GET['es'])){
                    echo "";
                    }else{
                    echo"Notre clients";}

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


    <footer>
                <p>Copyright &copy; Your Website 2014</p>
            
        </div>
    </footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
   


<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
