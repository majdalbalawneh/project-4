<?php
session_start();



$fullname = $_SESSION["fn"] . " " . $_SESSION["sn"] . " " . $_SESSION["thn"] . " " . $_SESSION["ln"];
$adminemail = $_SESSION["e"];
$adminpass = $_SESSION["p"];
$DCreated = $_SESSION["dc"];
$Dlastlogin = $_SESSION["ulog"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Admin page</title>
</head>

<body style="
      background-color: #ede9ee; 
    ">



    <h2 style="text-align: center;">Welcome to Admin Page </h2>

    <table style="border:solid;text-align: center; margin-left:33%; "
    cellspacing="50">

        <tr>
            <th>Full Name :</th>
            <td> <?php if (isset($fullname)) {
                        echo $fullname;
                    } ?> </td>
        </tr>
        <tr>
            <th>E-mail :</th>
            <td> <?php if (isset($adminemail)) {
                        echo $adminemail;
                    } ?></td>
        <tr>
            <th> Password :</th>
            <td><?php if (isset($adminpass)) {
                    echo $adminpass;
                } ?></td>
        </tr>
        <tr>
            <th>Date Created:</th>
            <td> <?php if (isset($DCreated)) {
                        echo $DCreated;
                    } ?> </td>
        </tr>
        <tr>
            <th>Date last login:</th>
            <td> <?php if (isset($Dlastlogin)) {
                        echo $Dlastlogin;
                    } ?></td>
        </tr>
    </table>
    <br>
    <div style="text-align: center" class="button">
          <button onclick="document.location='landing.html'" target="_blank"  type="button" id="button1" value="">LogOut</button>
           
        </div>
</body>

</html>