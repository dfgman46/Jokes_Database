<?php

require_once 'Autoloader.php'; 
class BankingBusinessService {

    function getCheckingBalance() {
        include "bank_Connect.php"; 
    
        $checkingservice = new CheckAccountDataService($mysqli); 
        $balance = $checkingservice->getBalance(); 
    
        $mysqli->close(); 
        return $balance; 
        
    }
    
    function getSavingsBalance(){
        include "bank_Connect.php"; 
    
        $savingsservice = new SavingsAccountDataService($mysqli); 
        $balance = $savingsservice->getBalance(); 
        
        return $balance; 
    
    }
}