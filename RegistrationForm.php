<?php $message = ""?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Form</title>
        <link href="logincss.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="grid">
            <h1 class="heroo">Registration Form</h1>
            <form name="Register" method="post" action="RegistrationController" class="form login">
                <div class="form__field">
                    <label for="login__username"></label>
                    <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" >
                </div>

                <div class="form__field">
                    <label for="login__password"></label>
                    <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" >
                </div>

                <div class="form__field">
                    <label for="login__password"></label>
                    <input id="login__password" type="password" name="password1" class="form__input" placeholder="Confirm Password" >
                </div>
                <div class="form__field">
                    <input type="submit" value="Sign Up" name="submit"/> 
                    <input type="submit" value="Login" name="submit" />
                </div>
        </div>
    </form>

    <script  src="js/index.js"></script>
    <p><?php echo $message ?></p>
</body>
</html>