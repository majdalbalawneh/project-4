<?php
session_start();

$admin = array('admin' => 'admin', 'adminpassword' => '12345@Mm');
if (isset($_POST['loginsubmit'])) {
    $username = $_POST['username'];
   
    $pass = $_POST['passlog'];

    if (( $username == $admin['admin']) && ($pass == $admin['adminpassword'])) {
        header('location: Admin.php');
    } 
    elseif (isset($_SESSION["fn"]) && ( $username == $_SESSION["fn"]) && isset($_SESSION["p"]) && ($pass == $_SESSION["p"])) {
        header('location: welcome.php');
    } 
    else {
        $msg = "Invalid Login Details!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/aca8d5a1fa.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
   
    <div class="parent">
        <div class="loghead">log in</div>
        
        
        <div style="text-align: center; color: black;"> welcome back ! Login with your credention</div>
        <form    action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="d1">
                <label for="name">User Name</label require>
                <input type="text" id="name" name="username">    
            </div>

            <div class="d2">
                <label for="password">Password</label require>
                <input type="password" id="password" name="passlog">    
            </div>
            <p id="erroruser"><?php if (isset($msg)) {
                                            echo $msg;
                                        } ?></p>
            <div class="butt">
                <button type="submit" name="loginsubmit">Log in</button>
            </div>
            <div style="text-align: center ; color: black;">
                Do not have an account? <a href="signupf.php" style="color: beige;">Sign UP</a>

            </div>
        </form>
    </div>
    <!-- <div>

    <video style="margin-left:60%;" width="350" height="340" controls>
  <source src="./PHP in 100 Seconds.mp4" type="video/mp4">


</video>
    </div> -->
</body>
</html>