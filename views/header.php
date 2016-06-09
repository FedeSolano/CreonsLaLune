<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Créons la Lune</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/modern-business.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <link href="lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
  <script>
    $(document).ready(function(){
      $("#show").click(function(){
        $("#formmail1").slideToggle("slow");
      });
    });
  </script>
  <script>
    $(document).ready(function(){
      $("#show2").click(function(){
        $("#formmail2").slideToggle("slow");
      });
    });
  </script>
  <style>
    .formmail1{
      display:none;
    }
    /*header{
        margin-top:-20px;
    }*/</style>
</head>

<body>

<!-- Navigation -->
<?php
if ($_SESSION){
  echo'
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
      <a class="navbar-brand" href="./">Créons la Lune - Administration&nbsp;&nbsp;<i class="fa fa-moon-o"></i></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="?deconnexion">Déconnexion</a>
        </li>
        <li>
          <a href="?galerie">Galerie</a>
        </li>
        <li>
          <a href="?messagerie">Messagerie</a>
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
</nav>';
}else{
if(isset($_GET['fr'])){
echo'
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
          <a href="?messagerie">Messagerie</a>
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
</nav>';
}elseif(isset($_GET['nd'])){
  echo'
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
          <a href="?about">Over ons</a>
        </li>
        <li>
          <a href="?galerie">Galerij</a>
        </li>
        <li>
          <a href="?messagerie">Koeriersbedrijf</a>
        </li>
        <li>
          <a href="?contact">Contact</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Taal<b class="caret"></b></a>
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
</nav>';
}elseif(isset($_GET['en'])){
  echo'
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
          <a href="?about">About us</a>
        </li>
        <li>
          <a href="?galerie">Gallery</a>
        </li>
        <li>
          <a href="?messagerie">Message</a>
        </li>
        <li>
          <a href="?contact">Contact</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
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
</nav>';
}else{
  echo'
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
          <a href="?messagerie">Messagerie</a>
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
</nav>';
}
}
?>

<!-- Header Carousel -->
<?php
if(!$_SESSION){
echo'
<header id="myCarousel" class="carousel slide">
  <!-- Indicators -->



  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="row">
      <div class="col-xs-12">
        <div class="item active">
          <img src="datas/images/caqui.jpg" alt="logo" class=" hidden-sm hidden-xs img-responsive"/>
          <img src="datas/images/typo-creons-la-lune.jpg" alt="logo" class=" hidden-xl hidden-lg hidden-md img-responsive"/>

          <div class="carousel-caption">

          </div>

        </div>
      </div>
    </div>

  </div>


  <!-- Controls -->

</header>';
  }else{
  
}
?>