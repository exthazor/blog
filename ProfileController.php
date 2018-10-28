<?php

include_once 'Classes/Contact.php';
include_once 'Classes/ContactManager.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$contact = new Contact();
$message = "";
$reportStr = "";
if (isset($_POST['submit'])) {
    $buttonClicked = $_POST['submit'];
    $cm = new ContactManager();
    switch ($buttonClicked) {
        case "Create":
            $contact->setFname($_POST['fname']);
            $contact->setLname($_POST['lname']);
            $contact->setPhone($_POST['phone']);
            $contact->setEmail($_POST['email']);
            $contact->setAddress($_POST['address']);
            $message = $cm->insertContact($cont);
            break;

        case "Update":
            $contact->setFname($_POST['fname']);
            $contact->setLname($_POST['lname']);
            $contact->setPhone($_POST['phone']);
            $contact->setEmail($_POST['email']);
            $contact->setAddress($_POST['address']);
            $contact->setCid($_POST['id']);
            $message = $cm->updateContact($contact);
            break;

        case "Delete":
            $contact->setCid($_POST['id']);
            $message = $cm->deleteContact($contact);
            break;

        case "Show":
            $message = $cm->getContactList();
            break;

        case "Log Out":
            break;

        case "Get Record":
            $contact = $cm->getAContact($_POST['id']);
            break;

        default:
            break;
    }
}
include_once 'RegistrationForm.php';
