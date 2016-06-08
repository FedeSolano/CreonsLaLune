<?php
/**
 * Created by PhpStorm.
 * User: Stagiaire
 * Date: 8/06/2016
 * Time: 10:05
 */
$check=$hash_obj->CheckPassword($lepass, $stored_hash );

if ( $check ){
    print_r( "This is a valid user" );
    header("Location: ./");
} else {
    print_r( "Authentication failed, please Try again.");
}