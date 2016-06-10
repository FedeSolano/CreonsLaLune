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
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="test_images/bart.jpg" alt="">
                    <div class="caption">
                        <h3>Panayotis Bitzikoudis<br/>
                            <small><?php
                                switch ($i){
                                    case("EN"):
                                        echo"Grafic designer";
                                        break;
                                    case ("NL"):
                                        echo "Grafisch ontwerper";
                                        break;
                                    default:
                                        echo "Graphiste";
                                        break;
                                }
                                ?></small>
                        </h3>
                        <p><?php
                            switch ($i){
                                case("EN"):
                                    echo"English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime";
                                    break;
                                case ("NL"):
                                    echo "Nederlands Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime";
                                    break;
                                default:
                                    echo "Français Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime";
                                    break;
                            }
                            ?></p>
                        <span id="show2" class="btn btn-danger" href="#"><span class="glyphicon glyphicon-envelope" style="font-family:'Comfortaa-Regular';">&nbsp;<?php
                                switch ($i){
                                    case("EN"):
                                        echo"Send an email";
                                        break;
                                    case ("NL"):
                                        echo "Een email sturen";
                                        break;
                                    default:
                                        echo "Envoyer un e-mail";
                                        break;
                                }
                                ?></span></span>
						<div id="formmail2"  style="display:none">
                        <form  name="sentMessage1" id="contactForm1" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label style="padding-top:15px;"><?php
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
                                    <input type="text" class="form-control" id="name1" required data-validation-required-message="Please enter your name.">
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
                                    <input type="tel" class="form-control" id="phone1" required data-validation-required-message="Please enter your phone number.">
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
                                    <input type="email" class="form-control" id="email1" required data-validation-required-message="Please enter your email address.">
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
                                    <textarea rows="10" cols="100" class="form-control" id="message1" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success1"></div>

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
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="test_images/lisa.jpg" alt="">
                    <div class="caption">
                        <h3>Anne Deneuville<br/>
                            <small><?php
                                switch ($i){
                                    case("EN"):
                                        echo"Commercial agent";
                                        break;
                                    case ("NL"):
                                        echo "Handelsagent";
                                        break;
                                    default:
                                        echo "Commerciale";
                                        break;
                                }
                                ?></small>
                        </h3>
                        <p><?php
                            switch ($i){
                                case("EN"):
                                    echo"English Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime";
                                    break;
                                case ("NL"):
                                    echo "Nederlands Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime";
                                    break;
                                default:
                                    echo "Français Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime";
                                    break;
                            }
                            ?></p>
                        <span id="show" class="btn btn-danger" href="#"><span class="glyphicon glyphicon-envelope" style="font-family:'Comfortaa-Regular';">&nbsp;<?php
                                switch ($i){
                                    case("EN"):
                                        echo"Send an email";
                                        break;
                                    case ("NL"):
                                        echo "Een email sturen";
                                        break;
                                    default:
                                        echo "Envoyer un e-mail";
                                        break;
                                }
                                ?></span></span>
                        
                        <div id="formmail1"  style="display:none">
                        <form  name="sentMessage2" id="contactForm2" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label style="padding-top:15px;"><?php
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
                                    <input type="text" class="form-control" id="name2" required data-validation-required-message="Please enter your name.">
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
                                    <input type="tel" class="form-control" id="phone2" required data-validation-required-message="Please enter your phone number.">
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
                                    <input type="email" class="form-control" id="email2" required data-validation-required-message="Please enter your email address.">
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
                                    <textarea rows="10" cols="100" class="form-control" id="message2" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success2"></div>

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
							<ul class="list-inline">
                            <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                            </li>
                        </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>

                <p>Some Address 987, NY<br/>
                    <i class="fa fa-phone fa-2x" style="font-size:19px;"></i> +34 9884 4893 <br/>
                    <i class="fa fa-mobile fa-2x"></i> +34 59855 9853 <br/>
                    <i class="fa fa-envelope-o fa-2x"  style="font-size:15px;"></i> <a href="#"> agency@blacktie.co</a> <br/>
                </p>
               <h3><?php
                   switch ($i){
                       case("EN"):
                           echo"Social networks";
                           break;
                       case ("NL"):
                           echo "Sociale netwerken";
                           break;
                       default:
                           echo "Résaux sociaux";
                           break;
                   }
                   ?></h3>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=100011425282091&fref=ts" target="_blank"><i class="fa fa-facebook-square fa-2x" style="font-size:45px"></i></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/takisxx?authType=OUT_OF_NETWORK&authToken=b4lN&locale=fr_FR&srchid=4239765791465210787454&srchindex=1&srchtotal=39&trk=vsrp_people_res_photo_headless&trkInfo=VSRPsearchId%3A4239765791465210787454%2CVSRPtargetId%3A89960326%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Afalse%2CauthType%3AOUT_OF_NETWORK"target="_blank"><i class="fa fa-linkedin-square fa-2x" style="font-size:45px"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x" style="font-size:45px"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x" style="font-size:45px"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
     <!--   <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>-->


        <!-- /.row -->



        <!-- Footer -->
        