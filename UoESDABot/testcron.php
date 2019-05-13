<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 2/3/2016
 * Time: 7:37 AM
 */
$message="The cron has successfully ran";
$file=fopen("telegram.txt","w+");
fwrite($file,$message);
fclose($file);
