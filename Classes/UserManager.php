<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'User.php';
include_once 'DBManager.php';

/**
 * Description of UserManager
 *
 * @author rhitam
 * 
 */
class UserManager extends DBManager {

    public function checkPassword($user) {
        $result = FALSE;
//        $message = "No message";
        $query = "SELECT username, pass FROM user WHERE username=? and pass=?";
        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("ss", $user->username, $user->pass);
            $ps->execute();
            $ps->bind_result($username, $pass);
            if ($ps->fetch()) {
                if ($username == $user->username && $pass == $user->pass) {
                    $result = TRUE;
                }
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }

        return $result;
    }

    public function checkPasswordUnSafe($user) {
        $result = FALSE;
//        $message = "No message";
        $query = "SELECT username, pass FROM user WHERE username='" . $user->username . "' and pass='" . $user->pass . "'";
        try {
            $ps = $this->conn->prepare($query);
            //$ps->bind_param("ss", $user->username, $user->pass);
            $ps->execute();
            $ps->bind_result($username, $pass);
            if ($ps->fetch()) {
                if ($username == $user->username && $pass == $user->pass) {
                    $result = TRUE;
                }
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }

        return $result;
    }

    public function checkDuplicate($user) {
        $result = FALSE;
//        $message = "No message";
        $query = "SELECT username FROM user WHERE username=?";
        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("s", $user->username);
            $ps->execute();
            $ps->bind_result($username);
            if ($ps->fetch()) {
                $result = TRUE;
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }

    public function insertUser($user) {
        $message = "";
//        $message = "No message";
        $query = "INSERT INTO user(username, pass, GroupID) VALUES(?, ?, ?)";
        try {
            $ps = $this->conn->prepare($query);
            $ps->bind_param("ssi", $user->username, $user->pass, $user->groupid);
            $ps->execute();
            if ($ps->fetch() === TRUE) {
                $message = "Successfully saved!";
            } else {
                $message = "Something went wrong.";
            }
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $message;
    }

    public function validate($user) {
        $message = "";
        if (empty($user->username) || strlen($user->username) > 20) {
            $message = "Invalid user-name entered ";
        }
        if (empty($user->pass) || strlen($user->pass) > 20) {
            $message .= "Invalid password entered";
        }
        return $message;
    }
    
    public function validateSql($user) {
        $message = "";
        $culpritStr = array("'", ";", "select", "insert", "update", "delete", "drop");
        $a_user = new User();
        foreach ($culpritStr as $a_Str) {
            $user->setUsername(str_ireplace($a_Str, "",$user->username));
            $user->setPass(str_ireplace($a_Str, "",$user->pass));
        }
        return $user;
    }

}
