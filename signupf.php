<?php
session_start();
$letters = "/^[A-Za-z]+$/";
$filter = "/([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/";
$pwd_expression = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$/";
$phonfilter = "/[0-9]{14}/";

$fErr = "";
$sErr = "";
$thErr = "";
$lErr = "";
$eErr = "";
$dErr = "";
$phErr = "";
$pErr = "";
$cpErr = "";


if (isset($_POST['submit'])) {

    $dateOfBirth = $_POST["date"];
    $today = date("d-m-Y");
    $differ = date_diff(date_create($dateOfBirth), date_create($today));
    $age = $differ->format('%y');



    if (!preg_match($letters, $_POST['first'])) {
        $fErr = "The Name must contain alphabet characters!";
    } elseif (!preg_match($letters, $_POST['second'])) {
        $sErr = "The  Name must contain alphabet characters!";
    } elseif (!preg_match($letters, $_POST['third'])) {
        $thErr = "The  Name must contain alphabet characters!";
    } elseif (!preg_match($letters, $_POST['last'])) {
        $lErr = "The  Name must contain alphabet characters!";
    } elseif ($age < 16) {
        $dErr = "you must be at least 16 years old to sign up!";
    } elseif (!preg_match($filter, $_POST['email'])) {
        $eErr = "Email must be as : info@gmail.com";
    } elseif (!preg_match($phonfilter, $_POST['phon'])) {
        $phErr = "mobile number must contain 14 digits only!";
    } elseif (!preg_match($pwd_expression, $_POST['pass'])) {
        $pErr = "Upper case, Lower case, Special character and Numeric letter are required in Password filed!";
    } elseif (($_POST['cpass']) !== ($_POST['pass'])) {
        $cpErr = "password not matched!";
    } else {
        $DCreated = date("F d Y ");
        $Userlastlogin = date("d/m/y - H:i:s ") . (12 * 24 * 60 * 60 + time());

        $_SESSION["ulog"] = $Userlastlogin;
        $_SESSION["dc"] = $DCreated;
        $_SESSION["fn"] = $_POST["first"];
        $_SESSION["sn"] = $_POST["second"];
        $_SESSION["thn"] = $_POST["third"];
        $_SESSION["ln"] = $_POST["last"];
        $_SESSION["bd"] = $_POST["date"];
        $_SESSION["e"] = $_POST["email"];
        $_SESSION["ph"] = $_POST["phon"];
        $_SESSION["p"] = $_POST["pass"];
        $_SESSION["cp"] = $_POST["cpass"];

        header("location:login.php");
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">
    <title>sign up page</title>
</head>

<body>

    <header>
        <h2 style="text-align: center; color:black;">Sing UP Form</h2>
    </header>

    <main>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" id="regform" method="POST">
            <table class="table" cellspacing="10">


                <tr>
                    <td class="label">
                        <label for="first">First Name:</label>
                    </td>
                    <td class="input">
                        <input type="text" name="first" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div><?php if (isset($fErr)) {
                                    echo $fErr;
                                } ?>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td class="label">
                        <label for="last">Second Name:</label>
                    </td>
                    <td class="input">
                        <input type="text" name="second" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($sErr)) {
                                    echo $sErr;
                                } ?></div>
                    </td>
                </tr>

                <tr>
                    <td class="label">
                        <label for="third">Third Name:</label>
                    </td>
                    <td class="input">
                        <input type="text" name="third" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($thErr)) {
                                    echo $thErr;
                                } ?></div>
                    </td>
                </tr>
                <tr>
                    <td class="label">
                        <label for="last">Last Name:</label>
                    </td>
                    <td class="input">
                        <input type="text" name="last" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($lErr)) {
                                    echo $lErr;
                                } ?></div>
                    </td>
                </tr>

                <tr>
                    <td class="label">
                        <label for="date">Date of Birth:</label>
                    </td>
                    <td class="input">
                        <input class="date" type="date" name="date" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div><?php if (isset($dErr)) {
                                    echo $dErr;
                                } ?></div>
                    </td>
                </tr>

                <tr>
                    <td class="label">
                        <label for="mail">Email:</label>
                    </td>
                    <td class="input">
                        <input type="email" id="mail" class="mail" name="email" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($eErr)) {
                                    echo $eErr;
                                } ?></div>
                    </td>
                </tr>

                <tr>
                    <td class="label">
                        <label for="mobile">Mobile Number:</label>
                    </td>
                    <td class="input">
                        <input type="text" name="phon" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($phErr)) {
                                    echo $phErr;
                                } ?></div>
                    </td>
                </tr>

                <tr>
                    <td class="label">
                        <label for="pass">Password:</label>
                    </td>
                    <td class="input">
                        <input type="password" name="pass" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($pErr)) {
                                    echo $pErr;
                                } ?></div>
                    </td>
                </tr>

                <tr>
                    <td class="label">
                        <label for="cpass">Confirm Password:</label>
                    </td>
                    <td class="input">
                        <input type="password" name="cpass" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div><?php if (isset($cpErr)) {
                                    echo $cpErr;
                                } ?> </div>
                    </td>
                </tr>

                <tr class="btn">
                    <td colspan="2">
                        <button type="submit" name="submit" > 
                            Sign UP</button>
                    </td>
                </tr>
                <td>
                    <p style="text-align: center;">Already have an account ?<span><a href="login.php"><strong>Login</a></span></p>
                </td>

            </table>
        </form>
    </main>
</body>

</html>