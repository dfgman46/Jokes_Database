<?php
require_once 'Autoloader.php';

include "bank_Connect.php";

// $checking = new CheckAccountDataService();
// $saving = new SavingsAccountDataService(); 

// $checkbalance = $checking->getBalance();
// $savingbalance = $saving->getBalance();

// echo "Curent Values: <br>"; 
// echo "Checking balance = " . $checkbalance . "<br>";
// echo "Saving balance = " . $savingbalance . "<br>";

// echo "Take $100 from checking and put it into savings <br>"; 
// $checking->updateBalance($checkbalance - 100);
// $saving->updateBalance($savingbalance + 100); 


// $checkbalance = $checking->getBalance();
// $savingbalance = $saving->getBalance();

// echo "Curent Values: <br>"; 
// echo "Checking balance = " . $checkbalance . "<br>";
// echo "Saving balance = " . $savingbalance . "<br>";
$bs = new BankingBusinessService();

$checkbalance = $bs->getCheckingBalance();
$savingbalance = $bs->getSavingsBalance();

echo "Current Values :<br>";
echo "Checking balance = " . $checkbalance . "<br>"; 
echo "Savings balance = " . $savingbalance . "<br>"; 
?> 