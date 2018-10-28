<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$servername = "localhost";
$username = "root";
$password = "faptaincy";
$dbname = "JavaContactsApp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sqlStr = "select id, fname, lname from mycontact";

$result = $conn->query($sqlStr);
//if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: " . $row["id"] . " | " . "fname: " . $row["fname"] . " | " . "lname:" . $row["lname"] . "<br/>";
    }
//}
// else {
//    echo"no results";
//}