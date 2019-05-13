<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 10/31/2015
 * Time: 9:29 PM
 */
function curl_get_contents($url)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    //curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($curl);
    curl_close($curl);
    return $data;
}

//check served updates
function checkServed($uid){
    global $db;
    $query=$db->prepare("SELECT * FROM updates WHERE update_id=?");
    $query->execute(array($uid));
    if($query->rowCount()==0){
        return true;
    }else return false;
}

//insert replies
function insert_reply($uid){
    global $db;
    $query=$db->prepare("INSERT INTO updates (id,update_id) VALUES (?,?)");
    $data=array(null,$uid);
    if($query->execute($data)){
        return true;
    }else return false;
}

//add users function
function addUser($uname,$cid){
    global $db;
    $quer=$db->prepare("INSERT INTO users (id,uname,chat_id) VALUES(?,?,?)");
    $data=array(null,$uname,$cid);
    $quer->execute($data);
}

//identify function
function isKnown($cid){
    global $db;
    $query=$db->prepare("SELECT * FROM users WHERE chat_id=?");
    $query->execute(array($cid));
    if($query->rowCount()==1){
        return true;
    }
    else return false;
}

function bot_replies($cmd){

    $valid_days=array(
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    );

    if(in_array(ucfirst($cmd),$valid_days)){

        $reply=whichDay(ucfirst($cmd));

    }else{
        $reply = "Hi.How may I serve you? Send me a day name and get a list of activities.";
    }

    return $reply;
}

function whichDay($day){
    global $db;

    $day=ucfirst(trim($day));

    $message="Status Report for $day: \n\n";
    $query=$db->prepare("SELECT activity,act_ven,start_time FROM uoesda_schedule WHERE act_day=?");
    $query->execute(array($day));
    if($query->rowCount()>0){
        while($result=$query->fetch(PDO::FETCH_ASSOC)){
            $message.=$result['activity'].", venue-".$result['act_ven']." at ".$result['start_time']."\n ================= \n";
        }
    }else $message="No activity for $day.";

    return $message;
}

function sendSummary(){
    global $db;

    $link=null;
    $auth=null;
    $sendMessage=null;

    require_once'./botauth.php';

    $today=date("l");


    //pick users from the db
    $pick=$db->prepare("SELECT * FROM users");
    $pick->execute();
    while($rst=$pick->fetch(PDO::FETCH_ASSOC)) {
        $summary="Good morning. Acknowledge receipt of UoESDA update schedule.\n\n";
        $chat_id = $rst['chat_id'];
        $uname = $rst['uname'];

        //get lschedule to alert
        $query = $db->prepare("SELECT * FROM uoesda_schedule WHERE act_day=?");
        $dt_ar = array($today);
        $query->execute($dt_ar);
        if($query->rowCount() > 0) {
            while ($subs = $query->fetch(PDO::FETCH_ASSOC)) {
                $summary .= $subs['activity'].", venue-".$subs['act_ven']." at ".$subs['start_time']."\n ================= \n";
            }
        }else $summary="Good morning. No activity for today!";
        curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . urlencode($summary));
        $summary=null;
    }


}

//reminder function
function remindMe(){
    global $db;

    date_default_timezone_set("Africa/Nairobi");
    $now=date("h:i a");
    $add_hour=strtotime($now) + 60*60;
    $next=date('h',$add_hour);
    $ampm=date('a',$add_hour);

    $today=date("l");

    if($next!=10){
        $next=str_replace("0","",$next);
    }
    $next_close=$next." ".$ampm;

    //bot credentials
    $link=null;
    $auth=null;
    $sendMessage=null;

    require_once'./botauth.php';

    //get activitites to alert
    $query=$db->prepare("SELECT activity,act_ven FROM uoesda_schedule WHERE act_day=? AND start_time=?");
    $dt_ar=array($today,$next_close);
    $query->execute($dt_ar);
    if($query->rowCount()>0){
        $result=$query->fetch(PDO::FETCH_ASSOC);
        $activity=$result['activity'];
        $venue=$result['act_ven'];

        $pick=$db->query("SELECT * FROM users");
        $pick->execute();
        while($rst=$pick->fetch(PDO::FETCH_ASSOC)){
            $chat_id=$rst['chat_id'];
            $uname=$rst['uname'];

            $notification="Hello ".$uname.", you have ".$activity.", venue-".$venue." at ".$next_close;
            $notification.=". Please remember to attend. God bless.";

            curl_get_contents($link . $auth . $sendMessage . "?chat_id=" . $chat_id . "&text=" . $notification);
        }

    }


}
