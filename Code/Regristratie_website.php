<!DOCTYPE html>
<html lang="en">
    <video id="bgvid" playsinline autoplay muted loop>
    <source src="Greece_footage.mp4" type="video/webm">
    <source src="Greece_footage.mp4" type="video/mp4">
    </video>
    <head>
        <meta charset="utf-8">
            <?php include 'Login_DB_website.php';?>
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
                height: 30%;
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
                <tr><td> <input class="input" type="text" name="Rname" placeholder="Enter Username"></td></tr>
                <tr><td> <input class="input" type="password" name="Rpassword" placeholder="Enter Password"> </td></tr>
                <tr><td> <input id="button" type="submit" name="register" aria-required="true" value="Registreer"></td></tr>
            </table>
                
            <p><a href="Login_website.php">Al een account? Klik dan hier!</a></p>
                
                <?php
                if (isset($_POST['register'])) {

                    $R_user = $_POST['Rname'];
                    $R_wachtwoord = md5($_POST['Rpassword']);
                    
                    echo "<br>" . getRegister($R_user, $R_wachtwoord);
                };
            ?>
                
            </form>
               
                
            
            
        </div>
    </body>
</html>
