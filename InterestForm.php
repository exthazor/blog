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
        <form name="InterestForm" method="POST" action="InterestController.php">
            <table border="1">

                <tbody>
                    <tr>
                        <td>Principal: </td>
                        <td><input type="text" name="principal" value="" size="10" /></td>
                    </tr>
                    <tr>
                        <td>Rate of Interest:</td>
                        <td><input type="text" name="rate" value="" size="10" /></td>
                    </tr>
                    <tr>
                        <td>Number of Years:</td>
                        <td><input type="text" name="years" value="" size="10" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Calculate" name="submit" /></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </form>
        <?php
//        include_once 'Classes/InterestClass.php';
//        // put your code here
//        if (isset($_POST['submit'])) {
//            $principal = $_POST['principal'];
//            $rate = $_POST['rate'];
//            $years = $_POST['years'];
//            $interest = InterestClass::calculateSimpleInterest($principal, $rate, $years);
//            $interest = $principal * $rate * $years / 100.0;
            print $message;
//        }
        ?>
    </body>
</html>
