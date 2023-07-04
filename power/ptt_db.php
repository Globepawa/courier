<?php 
 $host = "localhost:3306";
 $user = "root";
 $pw = "";
 $m_db = "ptt_db";
//db conection
$ppp = mysqli_connect($host, $user, $pw, $m_db);
if(! $ppp){
    die("Connection Failed");
}
?>