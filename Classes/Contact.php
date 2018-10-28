<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author rhitam
 */
class Contact {

    var $cid;
    var $fname;
    var $lname;
    var $phone;
    var $email;
    var $address;
    
    public function __construct() {
        $this->cid = 0;
        $this->fname = "";
        $this->lname = "";
        $this->groupc = "";
        $this->phone = "";
        $this->email = "";
        $this->address = "";
    }
    

    function getCid() {
        return $this->cid;
    }

    function getFname() {
        return $this->fname;
    }

    function getLname() {
        return $this->lname;
    }

    function getPhone() {
        return $this->phone;
    }

    function getEmail() {
        return $this->email;
    }

    function getAddress() {
        return $this->address;
    }

    function setCid($cid) {
        $this->cid = $cid;
    }

    function setFname($fname) {
        $this->fname = $fname;
    }

    function setLname($lname) {
        $this->lname = $lname;
    }

    function setPhone($phone) {
        $this->phone = $phone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAddress($address) {
        $this->address = $address;
    }

}
