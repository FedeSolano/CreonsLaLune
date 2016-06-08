<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 7/06/2016
 * Time: 11:14
 */
if(empty($_GET)){
    require_once 'models/admin.php';
    require_once 'views/admin.php';

}elseif(isset($_GET['admin'])){
    require_once 'models/.php';
    require_once 'views/.php';
}elseif (isset($_GET['deconnexion'])) {
    require "models/deconnexion.php";
}else{
    require_once 'models/admin.php';
    require_once 'views/admin.php';
}