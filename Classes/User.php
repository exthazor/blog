<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User {

    var $id;
    var $username;
    var $pass;
    var $groupid;
    
    public function __construct() {
        $this->id = 0;
        $this->username = "";
        $this->pass = "";
        $this->groupid = 0;
    }

    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getPass() {
        return $this->pass;
    }

    function getGroupid() {
        return $this->groupid;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setGroupid($groupid) {
        $this->groupid = $groupid;
    }

}
