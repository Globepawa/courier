<?php 
include('../power/ptt_db.php');

function user(){
    global $ppp;

    $user = "select * from parcel_log";
    $rslt = $ppp->query($user);
    if(mysqli_num_rows($rslt)>0){
        while($rows=mysqli_fetch_assoc($rslt) ){
            $rows['set_type'];
        }
    }
}


?>