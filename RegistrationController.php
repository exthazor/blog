<?php
$message = "";

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
        case "Sign Up":
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirm_password = $_POST['password1'];
            $user = new User();
            if ($password != $confirm_password) {
                $message = "The passwords are not equal. Please check.";
            } else {
                $user->setUsername($username);
                $user->setGroupid(1);
                $user->setPass($password);
                if (!$um->checkDuplicate($user)) {                   
                    $message = $um->insertUser($user);
                } else {
                    $message = "Please check your input details.";
                }
            }
            break;

        case "Login":
            header("location:LoginForm.php");
            break;

        default:
            break;
    }
}
include_once 'RegistrationForm.php';
