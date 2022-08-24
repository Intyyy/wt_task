<?php 
    include '../controller/session.php';
    include '../user_controller/add_userCntrl.php';
    
    if($_SESSION['usertype'] == "Admin"){}
    else{header("location: ../controller/hackerCntrl.php");}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/stylesheet/crowdfunding.css?v=<?php echo time(); ?>" rel="stylesheet">
    <title>Add User</title>
</head>
<body>
    <?php include('../header_footer/header_after_login.php'); ?>
    <div class="main">
    <?php include('../controller/panelCntrl.php'); ?>
        <section>
        <input type="button" onclick="goBack()" class="link-hvr" value="← Back">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return RegistrationValidation()" method="post" enctype="multipart/form-data">
            <div class="">
                <h1 ><legend>ADD NEW USER</legend></h1>
                <table>
                    <tr>
                        <td><label for="name">Name</label></td>
                        <td>: <input type="text" id="name" name="name" >
                        <span id="nameErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td>: <input type="email" id="email" name="email">
                        <span id="emailErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="username">User Name</label></td>
                        <td>: <input type="text" id="username" name="username">
                        <span id="usernameErr" class="error">* <?php echo $error ?></span></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td>: <input type="text" id="password" name="password">
                        <span id="passwordErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="cpass">Confirm Password &nbsp;&nbsp;&nbsp;&nbsp;</label></td>
                        <td>: <input type="text" id="cpass" name="cpass">
                        <span id="cpassErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Phone</label></td>
                        <td>: <input type="tel" id="phone" name="phone">
                        <span id="phoneErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td><label for="address">Address</label></td>
                        <td>: <textarea id="address" name="address" rows="4" cols="23"></textarea>
                        <span id="addressErr" class="error">*</span></td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dob">Date of Birth</label></td>
                            <td>: <input type="date" date_format="dd/mm/yyy" id="dob" name="dob" min="1953-01-01" max="1998-12-31">
                            <span id="dobErr" class="error">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>User Type</legend>
                            <select name="usertype" id="usertype">
                                <option value="">Select</option>
                                <option value="Home">Home Internet</option>
                                <option value="Corporate">Corporate Internet</option>
                                <option value="Wireless">Wireless Internet</i></option>
                                <option value="Student">Student Internet</option>
                                <option value="IPTelephony">IP Telephony</option>
                                <option value="Host&Develope">Hosting & Developement</option>
                            </select>
                            <span id="usertypeErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" id="Male" value="Male">Male
                            <input type="radio" name="gender" id="Female" value="Female">Female
                            <input type="radio" name="gender" id="Other" value="Other">Other  
                            <span id="genderErr" class="error">*</span>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                            <legend>User Image</legend>
                            <input type="file" name="image" id="image">  
                            <span id="imageErr" class="error">*</span>
                            </fieldset> <br>
                        </td>
                    </tr>
                    </table>
                    <table>
                    <tr>
                        <td width="200px">
                            <input type="submit" name="addUser" value="ADD" class="btn">
                        </td>
                        <td>
                            <input type="reset" value="Reset" class="btn">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="top-mar-10 green">
                            <?php  
                                if(isset($message))  
                                {  
                                    echo $message;  
                                }  
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </form> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </section>
    </div>
    <?php include('../header_footer/copyright.php'); ?>
</body>
</html>