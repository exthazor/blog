<?php

include_once 'Classes/DBManager.php';
include_once 'Classes/Contact.php';
include_once 'Classes/ContactManager.php';
include_once 'Classes/BlogCategoriesManager.php';
include_once 'Classes/User.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//$dbm = new DBManager();
//$sqlStr = "insert into groups (gname) values ('Rocket')";
//$numRecords = $dbm->executeTrans($sqlStr);
//echo "Number of records inserted: " . $numRecords . "<br/>";
//$sqlStr = "select * from groups";
//$result = $dbm->getAllRecords($sqlStr);
//while ($row = $result->fetch_array()) {
//    print $row[0] . " | " . $row[1] . "<br/>";
//}
//$contact = new Contact();
//$contact->setFname("aaaaaaaaaa");
//$contact->setLname("bbbbbbbbbb");
//$contact->setPhone("32423423");
//$contact->setEmail("sapd@yahoo.co.in");
//$contact->setAddress("Dispur, Guwahati");
//try {
//    $cm = new ContactManager();
//    $message = $cm->insertContact($contact);
//    echo $message;
//} catch (Exception $ex) {
//    print $ex->getMessage();
//}
//print "<br/>" . $contact->getFname() . " | " . $contact->getLname() . "<br/>";
//$id = 16;
//$cm = new ContactManager();
//try {
//    $contact = $cm->getAContact($id);
//    print "<br/>" . $contact->getFname() . " | " . $contact->getLname() . "<br/>";
//} catch (Exception $ex) {
//    print $ex->getMessage();
//}
//$bcm = new BlogCategoriesManager();
//try {
//    $allRecords = $bcm->getCategories();
//    foreach ($allRecords as $aRecord) {
//        print $aRecord[0] . " | " . $aRecord[1] . "<br/>";
//    }
//try {
//    $categoriesDDList = $bcm->getCategoryDDList();
//    print $categoriesDDList;
//    }
//catch (Exception $ex) {
//    print $ex->getMessage();
//}
$str = "; a name";
$user = new User();
$user->setUsername("aaa;;;");
$user->setPass("bbb;");
$user = validate($user);
print $user->username . " | " . $user->pass;

function validate($user){
    $user->setUsername(str_ireplace(";", "", $user->username));
    $user->setPass(str_ireplace(";", "", $user->pass));
    return $user;
}