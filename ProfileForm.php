
<?php
//include_once 'Classes/Contact.php';
///*
// * To change this license header, choose License Headers in Project Properties.
// * To change this template file, choose Tools | Templates
// * and open the template in the editor.
// */
//$contact = new Contact();
////$groupDDListStr = "";
//$message = "";
//$reportStr = "";
//if (isset($_POST['submit'])) {
//    echo $_POST['fname'] . " | " . $_POST['lname'] . "<br/>";
//
//    $contact->setFname($_POST['fname']);
//    $contact->setLname($_POST['lname']);
//    $contact->setPhone($_POST['phone']);
//    $contact->setEmail($_POST['email']);
//    $contact->setAddress($_POST['address']);
//    print $contact->fname . " | " . $contact->lname . " | " . $contact->phone . " | " . $contact->email . " | " . $contact->address . " | ";
//}
//
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Page</title>
    </head>
    <body>
        <h1>User Registration Form</h1>
        <div align="right">
            <p>
                <b><u><?php echo $contact->getFname() ?></u></b>

            </p>
        </div>
        <form name="ProfileForm" method="post" action="ProfileController.php" >
        <!--<form name="RegistrationForm" method="post" action="" >-->
            <table>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="id" value="<?php echo $contact->getCid() ?>" size="5" /></td>
                    <td><input type="submit" value="Get Record" name="submit" /></td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td><input type="text" name="fname" value="<?php echo $contact->getFname() ?>" size="15" /></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><input type="text" name="lname" value="<?php echo $contact->getLname() ?>" size="15" /></td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td><input type="text" name="phone" value="<?php echo $contact->getPhone() ?>" size="15" /></td>
                </tr>

                <tr>
                    <td>Email: </td>
                    <td><input type="text" name="email" value="<?php echo $contact->getEmail() ?>" size="30" /></td>
                </tr>

                <tr>
                    <td>Address: </td>
                    <td><textarea rows="4" cols="50" name="address"><?php echo $contact->getAddress() ?></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Create" name="submit" /></td>
                    <td><input type="submit" value="Update" name="submit" /></td>
                    <td><input type="submit" value="Delete" name="submit" /></td>                   
                    <td><input type="submit" value="Show" name="submit" /></td>
                    <td><input type="submit" value="Log Out" name="submit" /></td>
                </tr>
            </table>
        </form>
        <p> 
        <?php echo $message ?>
        </p>
<?php echo $reportStr ?>
    </body>
</html>
