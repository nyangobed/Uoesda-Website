<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 11/27/2015
 * Time: 8:17 AM
 */
require_once '../inc/functions.php';
require_once '../UoESDABot/functions.php';

secure_session();
$adID=$_SESSION['adm_id'];

if($adID!=null){
    $_SESSION = array();
    $params = session_get_cookie_params();
    setcookie(session_name(),
        '', time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]);
    session_destroy();
    header("Location:../admin_login.php");

}else{
    header("location:../admin_login.php");

}