<?php 
//sesssion control

if(! isset($_SESSION['user'])){
 header('location: ../front/login.html');
}else{
    header('location: ../front/dashboard.html');
}



?>