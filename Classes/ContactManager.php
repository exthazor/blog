<?php

include_once 'Classes/DBManager.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactManager
 *
 * @author rhitam
 */
class ContactManager extends DBManager {

    public function __construct() {
        parent::__construct();
    }

    public function insertContact($cont) {
//        $con = DBManager();
        $message = "No message";
        $query = "INSERT INTO `mycontact`(`fname`, `lname`, `phone`, `email`, `address`) VALUES (?,?,?,?,?)";

        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("sssss", $cont->fname, $cont->lname, $cont->phone, $cont->email, $cont->address);

            if ($ps->execute() === TRUE) {
                $message = "Contact successfully saved!";
            } else {
                $message = "Something went wrong.";
            }
        } catch (Exception $ex) {
            $message = "Error:" . $ex->getMessage();
        }

        return $message;
    }

    public function updateContact($cont) {
        $message = "No message";
        $query = "UPDATE mycontact SET `fname`=?, `lname`=?, `phone`=?, `email`=?, `address`=? WHERE id=?";

        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("sssssi", $cont->fname, $cont->lname, $cont->phone, $cont->email, $cont->address, $cont->cid);

            if ($ps->execute() === TRUE) {
                $message = "Contact successfully updated!";
            } else {
                $message = "Something went wrong.";
            }
        } catch (Exception $ex) {
            $message = "Error:" . $ex->getMessage();
        }

        return $message;
    }

    public function deleteContact($contact) {
        $message = "No message";
        $query = "DELETE FROM mycontact WHERE id=?";

        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("i", $contact->cid);

            if ($ps->execute() === TRUE) {
                $message = "Contact successfully deleted!";
            } else {
                $message = "Something went wrong.";
            }
        } catch (Exception $ex) {
            $message = "Error:" . $ex->getMessage();
        }

        return $message;
    }

    public function getAContact($cid) {
//        $message = "No message";
        $query = "SELECT id,fname, lname,phone,email,address FROM mycontact WHERE id=?";
        $contact = new Contact();
        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("i", $cid);
            $ps->execute();
            $ps->bind_result($id,$fname,$lname,$phone,$email,$address);
            if ($ps->fetch()) {
                $contact->setCid($cid);
                $contact->setFname($fname);
                $contact->setLname($lname);
                $contact->setPhone($phone);
                $contact->setEmail($email);
                $contact->setAddress($address);
//                $message = "Contact received!";
            } else {
                $contact = null;
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }

        return $contact;
    }
    
    public function getContactList() {
//        $message = "No message";
        $query = "SELECT id, fname, lname, phone, email, address FROM mycontact";
        try {
            $ps = $this->conn->prepare($query);
            $ps->execute();
            $ps->bind_result($id,$fname,$lname,$phone,$email,$address);
            $tableStr = "<table border=\"1\">";
            $tableStr .= "<tr>";
            $tableStr .= "<th>"  . "ID" . "</th>" . "<th>". "First Name".  "</th>" . "<th>". "Last Name".  "</th>" . "<th>"  . "Phone Number". "</th>" . "<th>". "Email Address". "</th>" . "<th>" . "Address" . "</th>";
            $tableStr .= "</tr>";
            if ($ps->fetch()) {
                $tableStr .= "<tr>";
                $tableStr .= "<td>" . $id . "</td>"  . "<td>" . $fname . "</td>"  . "<td>" . $lname.  "</td>" . "<td>" . $phone . "</td>" . "<td>" . $email.  "</td>" . "<td>" . $address . "</td>";
                $tableStr .= "</tr>";
//                $message = "Contact received!";
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        $tableStr .= "</table>";
        return $tableStr;
    }

}
