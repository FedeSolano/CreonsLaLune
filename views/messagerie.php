<?php
$i = isset($_SESSION["lang"]) ? $_SESSION["lang"] : NULL;
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

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php
                                        ?>
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Messagerie</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><?php
                    switch ($i){
                        case("EN"):
                            echo"Send us a message";
                            break;
                        case ("NL"):
                            echo "Stuur ons een bericht";
                            break;
                        default:
                            echo "Envoyez-nous un message";
                            break;
                    }
                    ?></h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php
                                switch ($i){
                                    case("EN"):
                                        echo"Full Name:";
                                        break;
                                    case ("NL"):
                                        echo "Naam een voornaam :";
                                        break;
                                    default:
                                        echo "Nom et prénom :";
                                        break;
                                }
                                ?></label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php
                                switch ($i){
                                    case("EN"):
                                        echo"Phone Number:";
                                        break;
                                    case ("NL"):
                                        echo "Telefoonnummer :";
                                        break;
                                    default:
                                        echo "Numéro GSM :";
                                        break;
                                }
                                ?></label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php
                                switch ($i){
                                    case("EN"):
                                        echo"Your email:";
                                        break;
                                    case ("NL"):
                                        echo "Uw email :";
                                        break;
                                    default:
                                        echo "Votre email :";
                                        break;
                                }
                                ?></label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?php
                                switch ($i){
                                    case("EN"):
                                        echo"Message:";
                                        break;
                                    case ("NL"):
                                        echo "Bericht :";
                                        break;
                                    default:
                                        echo "Message :";
                                        break;
                                }
                                ?></label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages-->
                    <button type="submit" class="btn btn-primary"><?php
                        switch ($i){
                            case("EN"):
                                echo"Send message";
                                break;
                            case ("NL"):
                                echo "Bericht sturen";
                                break;
                            default:
                                echo "Envoyer message";
                                break;
                        }
                        ?></button>
                </form>
            </div>

        </div>
           
        <!-- /.row -->

      