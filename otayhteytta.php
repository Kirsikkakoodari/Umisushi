<?php require("script.php"); ?>
<?php 
   if(isset($_POST['submit'])){
      if(empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])){
         $response = "All fields are required";
      }else{
         $response = sendMail($_POST['email'], $_POST['subject'], $_POST['message']);
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<html>
<head>
    <style>
        body{
            min-height: 1000px;
            font-family: latha;
            color:white;
            background: linear-gradient(
            rgba(0,0,0,0.95), rgba(0,0,0,0.65), rgba(0,0,0,0.38), rgba(0,0,0,0)
            )
            ,url(kuvat/PARASTÄHÄNASTI345678999.png)no-repeat;
            background-size: cover;
        }
        .box{ width:1240px;
        float:right;
        border:0px solid black;}
        .box ul li{
            width: 200px;
            float:left;
            margin: 26px auto;
            text-align: center;
        }
        .box ul li a{ text-decoration: none;
        color:darkgray;}
        .box ul li a{ font-size: 35px;}
        .box ul li:hover{ background-color: darkred;}
        .box ul li a:hover{ color:white;}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<head>
    <style>
        .yhteystiedot {
            justify-content: center;
            max-width: 375px;
            margin: auto;
            width: 100%;
            align-items:center;
            line-height: 2vh;
            position: absolute;
            right: 0;
            left: 5;
            top: 475;
            bottom: 0;
            }
    </style>
</head>
<head>
    <style>
        .main {
            max-width: 375px;
            margin: auto;
            width: 100%;
            line-height: 3.7vh;
            position: absolute;
            right: 0;
            left: 0;
            top: 90px;
            bottom: 180px;
        }
    </style>
</head>
<section>
    
    <div class="main">
        <div class="4"></div>
        <h3 style="color:rgb(156, 156, 156);font-family:Arial, Helvetica, sans-serif">Umi Sushi Iris Zhang Y-tunnus: 3232485-1 </h3>
        <div class="first"></div>
        <h3 style="color:rgb(156, 156, 156);font-family:Arial, Helvetica, sans-serif">Puhelinumero: +358 414988400</h3>
        <div class="second"></div>
        <h3 style="color:rgb(156, 156, 156);font-family:Arial, Helvetica, sans-serif">Sähköposti: zhangzhikun198703@gmail.com</h3>
        <div class="third"></div>
        <h3 style="color:rgb(156, 156, 156);font-family:Arial, Helvetica, sans-serif">Osoite: Kymenlaaksonkatu 20 D 117 48100 Kotka</h3>
        
        <a href="https://www.facebook.com/p/Umi-Sushi-100075858564729/">Facebook</a>
        <a href="https://www.instagram.com/umisushi_suomi/">Instagram</a>
        <div class="5"></div>
        <h3 style="color:rgb(156, 156, 156);font-family:Arial, Helvetica, sans-serif">Huomio! Salaiseksi luokiteltua sisältö lähetettäessä käytäthän sähköpostia palautuslaatikon sijaan. </h3>
        <div class="6"></div>
        <h3 style="color:rgb(156, 156, 156);font-family:Arial, Helvetica, sans-serif">Warning! When sending classified content Please use email instead of the return box.
    </div>
</section>
<body>
    <div class="box">
    <ul type="none">
        <li><a href="umisushi.html"> Kotisivu</a></li>
        <li><a href="menu.html"> Menu</a></li>
        <li><a href="otayhteytta.html"> Ota yhteyttä</a></li>
        </ul>
    </div>
</body>
<head>
    <style>
        .poppeli {
            justify-content:center;
            max-width: 375px;
            margin: auto;
            width: 100%;
            align-items:center;
            line-height: 4vh;
            position: absolute;
            right: 0;
            left: -440;
            top: 660;
            bottom: 0;
        }
    </style>
</head>
<head>
<style>
    .container {
        justify-content: center;
        max-width: 750px;
        margin: auto;
        width: 100%;
        align-items:center;
        line-height: 3vh;
        position: absolute;
        right: 565px;
        left: 250;
        top: 50;
        bottom: 0;
    }
</style>

</head>

<head>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="info">
            </div>
          
            <label>Sähköposti</label>
            <input type="email" name="email" value="">
            
            <label>Aihe</label>
            <input type="text" name="subject" value="">
          
            <label>Viesti</label>
            <textarea name="message"></textarea>
          
            <button type="submit" name="submit">Lähetä</button>
            <?php
                if(@$response == "success"){
                    ?>
                        <p class="success">Email send successfully</p>
                    <?php
                }else{
                    ?>
                        <p class="error"><?php echo @$response; ?></p>
                    <?php
                }
            ?>
        </form>
      </div>
</head>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="otayhteytta.css" /> 
    <title>Umisushi.fi</title>
    <script src="src/app.js"></script>
    
</head>