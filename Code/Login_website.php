<!DOCTYPE html>
<html lang="en">
    <video id="bgvid" playsinline autoplay muted loop>
    <source src="Greece_footage.mp4" type="video/webm">
    <source src="Greece_footage.mp4" type="video/mp4">
    </video>
    <head>
        <meta charset="utf-8">
            <?php include 'Login_DB_website.php'?>
            <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
        <style>
            html {
                margin: 0;
                width: 100%;
                height: 100%;
            }
            body {
                margin: 0;
                background: #000; 
            }
            video { 
                position: fixed;
                top: 50%;
                left: 50%;
                min-width: 100%;
                min-height: 100%;
                width: auto;
                height: auto;
                z-index: -100;
                transform: translateX(-50%) translateY(-50%);
                background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
                background-size: cover;
                transition: 1s opacity;
            }
            .content {
                height: 60%;
                width: 25%;
                background-color: white;
                border-radius: 10px;
                margin: auto;
                position: fixed;
                top: 20%;
                left: 38%;
                
                background: rgba(255,255,255,0.5);
                box-shadow: 0px 0px 50px -10px black;
                
            }
            table {
                margin: auto;
                text-align: center;
                
            }
            
            #button {
                background-color: #d12020;
                border: none;
                color: white;
                padding: 15px 35px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 12px;
                border-radius: 4px;
                border: none;
                margin: 15px 0;
            }
            input[type=text], [type=password] {
                width: 100%;
                padding: 20px 40px;
                margin: 15px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }
            
            form {
                position: relative;
                top: 8%;   
            }
            
            p {
                font-size: 12px;
                font-family: open sans;
                text-align: center;  
            }
        </style>
    </head>
    <body>
        <div class="content">
            
            <form action="" method="post">
            <table border="0">    
                <tr><td> <input class="input" type="text" name="name" placeholder="Enter Username"> </td></tr>
                <tr><td> <input class="input" type="password" name="password" placeholder="Enter Password"> </td></tr>
                <tr><td> <input id="button" type="submit" name="login" value="Log In"></td></tr>
            </table>
                
            <p><a href="Registreer_website.php">Nog geen account? Meld je hier aan!</a></p> 
            
                
            <?php 
             if (isset($_POST['login'])) {
                 
                $user = $_POST['name'];
                $wachtwoord = $_POST['password'];
                 
                echo "<br>" . getPassword($user, $wachtwoord);
                
            };
            
            ?>
                
        </div>
    </body>
</html>