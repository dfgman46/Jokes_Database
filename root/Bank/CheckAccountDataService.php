<?php 
require_once 'Autoloader.php'; 

class CheckAccountDataService {

    private $mysqli; 
    function __construct($mysqli) {
        $this->$mysqli; 
    }
    
    function getBalance() {
        //include "bank_Connect.php"; 

        $sql = "SELECT BALANCE FROM CHECKING"; 
        $result = $this->mysqli->query($sql); 

        if ($result->num_rows == 0) {

            //$mysqli->close(); 
            return -1; 

        }else {
            $row = $result->fetch_assoc(); 
            $balance = $row['BALANCE']; 
            //$mysqli->close(); 
            return $balance; 
        }

    }
    function updateBalance($balance) {
        //include "bank_Connect.php"; 

        $sql = "UPDATE CHECKING SET BALANCE=$balance"; 
        $result = $this->mysqli->query($sql); 

        if ($result) {

            //$mysqli->close(); 
            return 1; 

        }else {
            //$mysqli->close(); 
            return 0;  
        }
    }

    
}
?> 