<?php 
require_once 'Autoloader.php'; 

class SavingsAccountDataService {

    private $mysqli; 

    function __construct($mysqli){
        $this->$mysqli; 
    }
     
    function getBalance() {
        //include "bank_Connect.php"; 

        $sql = "SELECT BALANCE FROM SAVINGS"; 
        $result = $this->mysqli->query($sql); 

        if ($result->num_rows == 0) {

            //$this->mysqli->close(); 
            return -1; 

        }else {
            $row = $result->fetch_assoc(); 
            $balance = $row['BALANCE']; 
            //$this->mysqli->close(); 
            return $balance; 
        }

    }
    function updateBalance($balance) {
        //include "bank_Connect.php"; 

        $sql = "UPDATE SAVINGS SET BALANCE=$balance"; 
        $result = $this->mysqli->query($sql); 

        if ($result) {

            //$this->mysqli->close(); 
            return 1; 

        }else {
            //$this->mysqli->close(); 
            return 0;  
        }
    }

    
}
?> 