<?php
session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Form</title>
        <link href="logincss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1 class="hero">Login</h1>
        <div class="grid">
            <form name="Login" method="post" action="LoginController" class="form login">
                <div class="form__field">
                    <label for="login__username"></label>
                    <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" >
                </div>

                <div class="form__field">
                    <label for="login__password"></label>
                    <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" >
                </div>
                <div class="form__field">
                    <input type="submit" value="Login" name="submit" />
                    <input type="submit" value="New User? Register" name="submit" />
                </div>
                <p><?php
                echo $message;
                ?></p>
        </div>
    </body>
</html>