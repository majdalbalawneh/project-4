
<?php
session_start();
if (isset($_POST["submit"])){


    $fnameErr = "";
    $snameErr = "";
    $tnameErr = "";
    $fonameErr = "";
    $emailErr = "";
    $fname = "";
    $sname = "";
    $tname = "";
    $foname = "";
    $email = "";
    $phon = "";
    $phonErr = "";
    $fullN = "";
    $pass = "";
    $cpass = "";
    $passErr = "";
    $cpassErr = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["fname"])) {
        $nameErr = "Name Field is required";
      } else {
        $fname = test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
          $fnameErr = "Only letters and white space allowed";
        }
      }
    }


    //////////


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["sname"])) {
        $snameErr = "Name Field is required";
      } else {
        $sname = test_input($_POST["sname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $sname)) {
          $snameErr = "Only letters and white space allowed";
        }
      }
    }

    /////////
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["tname"])) {
        $tnameErr = "Name Field is required";
      } else {
        $tname = test_input($_POST["tname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $tname)) {
          $tnameErr = "Only letters and white space allowed";
        }
      }
    }
    ///////////////////
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["foname"])) {
        $fonameErr = "Name Field is required";
      } else {
        $foname = test_input($_POST["foname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $foname)) {
          $fonameErr = "Only letters and white space allowed";
        }
      }
    }
    //////////////////////

    if (empty($_POST["email"])) {
      $emailErr = "Email field is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }
// ////////////////////////////////////////////////////
    if (empty($_POST["phon"])) {
      $phonErr = "phone number field is required";
    } else {
      $phon = test_input($_POST["phon"]);
    }
    if (preg_match("/[^0-9]/
    ", $phon)) {
      $phonErr = "Invalid phon numbar";
      echo $phonErr;
    }

    // /////////////////////////////////
    if (empty($_POST["pass"])) {
      $passErr = "password field is required";
    } else {
      $pass = test_input($_POST["pass"]);
      if (!filter_var("/(?=.?[A-Z])(?=.?[a-z])(?=.?[0-9])(?=.?[#?!@$%^&*-])/", $pass)) {
        $passErr = "Invalid pass format";
      }
    }

    if (empty($_POST["cpass"])) {
      $cpassErr = "Confirm password field is required";
    } else {
      $cpass = test_input($_POST["cpass"]);
      if ($_POST ["cpass"]!==$_POST["pass"] ){
        $cpassErr = "Invalid  Confirm password format";
      }
    }




    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $_SESSION["fullN"] =  $_POST ["fname"] .$_POST ["sname"] .$_POST ["tname"] .$_POST ["foname"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["phon"] = $_POST["Phon"];
header("location: login.php");
    ?>
    <h1> Sign Up </h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <b> First Name: </b> <input type="text" name="fname" value="<?php echo $fname; ?>">
      <span class="error"> * <?php echo $fnameErr; ?> </span>
      <br> <br>

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <b> Second Name: </b> <input type="text" name="sname" value="<?php echo $sname; ?>">
        <span class="error"> * <?php echo $snameErr; ?> </span>
        <br> <br>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <b> Third Name: </b> <input type="text" name="tname" value="<?php echo $tname; ?>">
          <span class="error"> * <?php echo $tnameErr; ?> </span>
          <br> <br>
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <b> Forth Name: </b> <input type="text" name="foname" value="<?php echo $foname; ?>">
            <span class="error"> * <?php echo $fonameErr; ?> </span>
            <br> <br>

            <!-- //////////////////////////// -->

            <b> Mobile Number </b>
            <span> <input type="text" name="phon" placeholder=" Enter number"> </span>
            <!-- //////////////////// -->
            <b> Enter E-mail: </b> <input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error"> * <?php echo $phonErr; ?> </span>
            <br> <br>
            <b> Password </b>
            <span> <input type="text" name="pass" placeholder=" Enter pass"> </span>
            <br><br>
            <!-- //////////////////// -->
            <b> Confirm Password: </b> <input type="text" name="cpass" value="<?php echo $cpass; ?>">
            <span class="error"> * <?php echo $cpassErr; ?> </span>
            <br> <br>


            <!-- /////////////////////////////////////// -->


            <td> <b> Select your Date of Birth </b> </td>  
    <td>  
        <select name="mm">  
            <option value=""> Month </option>  
            <?php   
            for($i=1;$i<=12;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="dd">  
            <option value=""> Date </option>  
            <?php   
            for($i=1;$i<=31;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
        <select name="yy">  
            <option value=""> Year </option>  
            <?php   
            for($i=1900;$i<=3022;$i++)  
            {  
            echo "<option value ='$i'>".$i."</option>";  
            }  
            ?>  
        </select>  
    </td>  
  </tr>  
  <tr>  




            <input type="submit" name="submit" value="Register ">
          </form>
          <?php
          echo "<h2> Your Input: </h2>";
          echo $fname . " " . $sname . " " . $tname . " " . $foname;
          echo "<br>";
          echo $email;
          echo "<br>";
          echo $phon;
          echo "<br>";
          echo $pass;
          echo "<br>";
          echo $cpass;
        
        }
          ?>
  </body>

  </html>
<! Doctype html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> PHP Registration Form Example </title>
    <style>
      .error {
        color: white;
        font-family: lato;
        background: yellowgreen;
        display: inline-block;
        padding: 2px 10px;
      }

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        margin: 50px auto;
        text-align: center;
        width: 800px;
      }

      h1 {
        font-family: sans-serif;
        display: block;
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        letter-spacing: 3px;
        color: hotpink;
        text-transform: uppercase;
      }

      label {
        width: 150px;
        display: inline-block;
        text-align: left;
        font-size: 1.5rem;
        font-family: 'Lato';
      }

      input {
        border: 2px solid #ccc;
        font-size: 1.5rem;
        font-weight: 100;
        font-family: 'Lato';
        padding: 10px;
      }

      form {
        margin: 25px auto;
        padding: 20px;
        border: 5px solid #ccc;
        width: 500px;
        background: #f3e7e9;
      }

      div.form-element {
        margin: 20px 0;
      }

      input[type=submit]::after {
        background: #fff;
        content: '';
        position: absolute;
        z-index: -1;
      }

      input[type=submit] {
        border: 3px solid;
        border-radius: 2px;

        display: block;
        font-size: 1em;
        font-weight: bold;
        margin: 1em auto;
        padding: 1em 4em;
        position: relative;
        text-transform: uppercase;
      }

      input[type=submit]::before {
        background: #fff;
        content: '';
        position: absolute;
        z-index: -1;
      }

      input[type=submit]:hover {
        color: #1A33FF;
      }
    </style>
  </head>

  <body>
    