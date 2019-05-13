<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 2/2/2016
 * Time: 1:15 PM
 */
require_once './db.php';
require_once './botauth.php';
require_once './functions.php';

$incoming=json_decode(file_get_contents('php://input'), true);
$result=$incoming['message'];

$username = $result["chat"]["username"];
$fname=$result["chat"]["first_name"];
$chat_id = $result["chat"]["id"];
$msg = $result["text"];

if($username == null || $username == ""){
    if($fname!=null){
        $username=$fname;
    }else $username="User_".$chat_id;
}

if(isKnown($chat_id)){
    $bot_feed=urlencode(bot_replies($msg));
    curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . $bot_feed);
}else{
    if($msg=="/subscribe") {
        addUser($username, $chat_id);
        $message = "Welcome," . $username . ". UoESDA will serve by reminding you of the activities.";
        curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($message));
    }elseif($msg=="/start"){
        $message = "Hi. Am UoESDA. Send me the /subscribe command to get to my updates daily.";
        curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($message));
    }else{
        $message = "Hi. Am UoESDA. Send me the /subscribe command to get to my updates daily.";
        curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($message));
    }
}
?>