<?php 
include('./ptt_db.php');

function Login($user, $soil){
global  $ppp;
$soil = md5($soil);

$login = "select * from customers_tb where u_name = '$user' and
u_pswd = '$soil' limit 1";

$resp = mysqli_query($ppp, $login);
if(mysqli_num_rows($resp)==1){
    session_start();
    $_SESSION['user'] = $user;
//Success Login
    return 011;

}else{
//login Error
    return 012;
}
}


?>