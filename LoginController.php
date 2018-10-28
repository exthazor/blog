<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'Classes/User.php';
include_once 'Classes/UserManager.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$message = "";
$reportStr = "";
if (isset($_POST['submit'])) {
    $buttonClicked = $_POST['submit'];
    $um = new UserManager();
    switch ($buttonClicked) {
        case "Login":
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = new User();
            $user->setUsername($username);
            $user->setPass($password);
//            $user = $um->validateSql(&$user);
            $_SESSION['username'] = $username;
            $um->validateSql($user);
            $message = $user->username . " " .$user->pass;
            $message = $um->validate($user);
            if (empty($message)) {//Validation is through
                if ($um->checkPasswordUnSafe($user)) {
//                if($um->checkPassword($user)){
                    header("location:BlogController.php");
                } else {
                    $message = "Please check your input details.";
                }
            }
            break;

        case "New User? Register":
            header("location:RegistrationForm.php");
            break;

        default:
            break;
    }
}
include_once 'LoginForm.php';
