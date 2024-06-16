<?php

//  setcookie("finegap_user","Cookie_updated",time()+(86400*30) ,"/");
// // setcookie("finegap_user",87,time()+(86400*30) ,"/");
// // setcookie("finegap_user",87,time()-1 ,"/");

// if(isset($_COOKIE['finegap_user'])){
//     echo $_COOKIE['finegap_user'];
// }else{
//     echo "Cookie is not set";
// }
 
session_start();

$_SESSION['user_name']="Kalaivanan";

if(isset($_SESSION['user_name']))
     echo $_SESSION['user_name'];
?>