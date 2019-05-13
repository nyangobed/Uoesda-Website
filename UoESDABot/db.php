<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 11/1/2015
 * Time: 12:11 PM
 */
$host="localhost";
$dbname="uoesdaor_dbone";
define("USER","uoesdaor_secuser");
define("PASS","secpass2015%");

try{
    $db= new PDO("mysql:host=$host;dbname=$dbname;",USER,PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}