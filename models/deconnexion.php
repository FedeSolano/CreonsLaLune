<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 8/06/2016
 * Time: 10:51
 */


$_SESSION = array();


if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


session_destroy();


header("Location: ./");