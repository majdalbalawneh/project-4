<?php
session_start();
if (isset($_SESSION["fn"]) && isset($_SESSION["sn"]) && isset($_SESSION["thn"]) && ($_SESSION["ln"])) {
    $fullname = $_SESSION["fn"]." " .$_SESSION["sn"] ." " .$_SESSION["thn"] ." " .$_SESSION["ln"];
}

if(isset($_SESSION["e"])){
    $email =$_SESSION["e"];
}
if(isset($_SESSION["ph"])){
    $phone =$_SESSION["ph"] ;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>welcome page</title>
  <style>
    .welcomeimg {
      width: 90%;
      height: 50%;
      text-align: center;


    }

    .welcome {
      text-align: center;
      /* text-shadow: 0 0 3px #0c090c; */
      color:blueviolet;

    }

    body {
      background-color: #ede9ee;
    }
    .usertable{
      /* border: solid; */
      text-align: center;
      margin-left: 30%;
    }
    p{
      margin-left: 33%;
    }
    .button{
     
width: 15%;
text-align: center;
  display: inline-block;
  padding: 10px 20px;
  font-size: 20px;
  cursor: pointer;
  margin-left: 33%;
  color: #fff;
  background-color: #d8da3c;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #999;
    }
    #button1:hover {background-color: #8535db}

#button1:active {
  background-color: #8535db;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#button2:hover {background-color:  #d8da3c}
    
  </style>
</head>

<body>

  <div class="welcome">
    <h2> It is an honor and a privilege to have you as a customer. Our future business with you is something we look forward to. Sincere greetings!
    </h2>
  </div>


  <div class="welcomeimg"><img src="./img/welcome.png" alt="welcome image" width="60%" height="40%"></div>


  <p>Congratulation! <?php if (isset($fullname)) {
                echo $fullname;
              } ?>
    You have logged in<br /></p>


  <div>
    <table class="usertable" cellspacing="10" >
      <tr>
        <th>Full Name :</th>
        <td> <?php if (isset($fullname)) {
                echo $fullname;
              } ?> </td>
      </tr>
      <tr>
        <th>E-mail :</th>
        <td> <?php if (isset($email)) {
                echo $email;
              } ?> </td>
      </tr>
      <tr>
        <th>Mobile Number :</th>
        <td> <?php if (isset($phone)) {
                echo $phone;
              } ?> </td>
      </tr>
    </table>
  </div>
  </div>
  <div class="button">
          <button onclick="document.location='landing.html'" target="_blank"  type="button" id="button1" value="">LogOut</button>
           
        </div>
</body>

</html>