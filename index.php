<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="Form1" method="POST">
            <?php
            $rollno = "";
            $name = "";
            if (isset($_POST['submit'])) {
                $rollno = $_POST['rollno'];
                $name = $_POST['name'];
//                echo "<script>alert('hi')</script>";
            }
            ?>
            <pre>
            Roll No:<input type="text" name="rollno" value="<?php echo htmlentities($rollno) ?>" size="10" /><br/>
            Name:   <input type="text" name="name" value="<?php echo htmlentities($name) ?>" size="50" /><br/>
            <input type="submit" value="Submit" name="submit" />
            </pre>
        </form>
    </body>
</html>
