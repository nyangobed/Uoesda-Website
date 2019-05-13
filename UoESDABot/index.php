<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 11/1/2015
 * Time: 12:10 PM
 */
require_once './db.php';
require_once './botauth.php';
require_once './functions.php';

$userInput=curl_get_contents($link.$auth.$updates);
$decoded_json=json_decode($userInput,true);
$result=$decoded_json['result'];

for($i=0;$i<=count($result)-1;$i++){

    $update_id=$result[$i]["update_id"];
    $username = $result[$i]["message"]["chat"]["username"];
    $chat_id = $result[$i]["message"]["chat"]["id"];
    $msg = $result[$i]["message"]["text"];

    if(checkServed($update_id)){
        if($username==null || $username==""){
            $username="User_".$chat_id;
        }
        if(isKnown($username,$chat_id)){
            $bot_feed=urlencode(bot_replies($msg));
            curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . $bot_feed);
            insert_reply($update_id);
        }else{
            if($msg=="/subscribe") {
                addUser($username, $chat_id);
                $message = "Welcome," . $username . ". UoESDA will serve by reminding you of the activities.";
                curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($message));
                insert_reply($update_id);
            }elseif($msg=="/start"){
                $message = "Hi. Am UoESDA. Send me the /subscribe command to get to my updates daily.";
                curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($message));
                insert_reply($update_id);
            }else{
                $message = "Hi. Am UoESDA. Send me the /subscribe command to get to my updates daily.";
                curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($message));
                insert_reply($update_id);
            }
        }
    }

}