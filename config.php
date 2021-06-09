<?php
if( !isset( $_SESSION ) ) {
    session_start();    //Start Session
}
if(!isset($_SESSION['arrUsername']) && !isset($_SESSION['arrPassword']))
{
    //Creates Arrays for login users.
    global $usernames;
    $usernames = array( "grandma","grandpa","grandson","granddaughter");
    global $passwords;
    $passwords = array("1234", "4321","0000","9999");


$_SESSION['arrUsername'] = $usernames;
$_SESSION['arrPassword'] = $passwords;
}