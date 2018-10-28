<?php

include_once 'Classes/InterestClass.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$message = "";
if (isset($_POST['submit'])) {
    $principal = $_POST['principal'];
    $rate = $_POST['rate'];
    $years = $_POST['years'];
    $interest = InterestClass::calculateSimpleInterest($principal, $rate, $years);
    $message = "Interest: " . $interest;
}
include_once 'InterestForm.php';
