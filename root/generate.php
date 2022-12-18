<?php
        //OJ4ZENVMUPIVXJHR

        require_once 'GoogleAuthenticator.php'; 

        $ga = new PHPGangsta_GoogleAuthenticator(); 

        $secret = $ga->createSecret(); 
        echo $secret.'<br />'; 

        $qr = $ga->getQRCodeGoogleUrl('Tutorial', $secret); 
        echo '<img src="'.$qr.'" /><br />'; 

        $myCode = $ga->getCode($secret); 

        $result = $ga->verifyCode($secret, $myCode, 3); 

        echo $result; 


?> 