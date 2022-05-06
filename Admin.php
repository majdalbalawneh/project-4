<?php
session_start();
$admin = 'majd';
// $_SESSION['lastaLI']
// print_r($_SESSION['arr']);
// $_SESSION['fn'];
// $_SESSION['mobile'];
// $_SESSION['date'];
// $_SESSION['email'];
// $_SESSION['pass'];
// $_SESSION['date_create'];
if($_SESSION['email'] !== $admin ){
    echo '<style type="text/css">
    table {
        display: none;
    }
    </style>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER PAGE</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="userpage.css">
    <script src="https://kit.fontawesome.com/7b836f378e.js" crossorigin="anonymous"></script>
    <style>
        body{
background-color: #000;
font-family: 'Zilla Slab', serif; 
}
.wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    
}
    .profile{
        position: relative;
        width: 70%;
        height:90%;
        background:url("../img/try.gif");
        background-size: cover;
        cursor: pointer;
        border: 12px;
        border-top-right-radius: 35px !important;
        border-radius: 6px;
        box-shadow:2px 2px 4px 4px #3FB4BE;
    }
    .overlay{
        width: 100%;
        height: 100%;
        background:rgba(0,0,0,0.8);
        border-radius: 12px;
        cursor: pointer;
        opacity: 0;
        transition: all 1s;
        border-top-right-radius: 35px !important;
        border-radius: 6px;
        
    }
   
   
    .overlay .about{
        position: relative;
        justify-content: center;
        align-items: center;
        display: flex;
        top:5%;
        color: #fff;
        flex-direction: column;
    }
    table{
        
        margin-top: 5%;
        width: 70%;
        height: 100%;
        text-align: center;
        border-spacing: 0px;
    }
    th{
        border-bottom: 1px rgb(32, 32, 51) solid;
    }
    td{
        padding-top: 2%;
    }
    /* th, td{
        margin: 30%;
    } */

    #pic{
        width: 200px;
        height: 200px;
        background-image:url(../img/userpic.jpg) ;
        border-radius: 50%;
        box-shadow:0 0 4px 4px #3FB4BE;
    }
    a{
        color: #fff;

    }

    @media only screen and (max-width: 500px) {
        table {
          font-size: small;
        }
      }
      @media only screen and (max-width: 350px) {
        table {
          font-size: x-small;
        }
        h1{
            font-size: medium;
        }

      }
    
    </style>
</head>
<body>

<div class="wrapper">
    <div class="profile">
        <div class="overlay">
            <div class="about">
                <div id ='pic'></div>
            
               <h1>Welcome <?php echo $_SESSION['fname'] ;?></h1>
                <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Last Login</th>
            </tr>
        </thead>
        <tbody>
            <tr >
               
                <td><?php echo $_SESSION['fname'] ;?> </td>
                <td><?php echo $_SESSION['email'] ;?> </td><!--User Email-->
                <td><?php echo $_SESSION['password'] ;?> </td> <!--User Password-->
                <td><?php echo $_SESSION['date_create'] ;?> </td> <!--User Date Create-->
                <td><?php echo $_SESSION['last_log'] ;?></td> <!--User Last Login Date-->
            </tr>
        </tbody>
    </table>
           
    
</div>
</body>
</html>