<?php

require_once 'GoogleAuthenticator.php'; 

$secret = 'HSP4W2OOBDPWUOKS'; 


if (isset($_POST['google_code'])) {
    $code = $_POST['google_code']; 
    $ga = new PHPGangsta_GoogleAuthenticator(); 
    $result = $ga->verifyCode($secret, $code, 3); 


    echo $result; 
}


?>