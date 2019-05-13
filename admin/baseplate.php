<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 11/26/2015
 * Time: 12:23 PM
 */
require_once '../inc/functions.php';
//secure_session();
//$adID=$_SESSION['adm_id'];
$adID=1;
if($adID){
    $admin_result_set=getAdmin($adID);
    $admin_names=$admin_result_set['ad_names'];
    $admin_prof_pic=$admin_result_set['prof_pic'];

    ?>

    <?php
    $db=null;
}else{
    // header("location:./index.php");
}
?>