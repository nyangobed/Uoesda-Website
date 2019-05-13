<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 2/2/2016
 * Time: 2:04 PM
 */
require_once './db.php';
require_once './functions.php';

date_default_timezone_set("Africa/Nairobi");
$now=(int)date('Hi');
$morning=500;
$morning_2=501;

if($now >= $morning && $now < $morning_2){
    sendSummary();
}

remindMe();
