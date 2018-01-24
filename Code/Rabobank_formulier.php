<!DOCTYPE html>
<html>
    <head>
        <title>Rabobank Formulier</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include 'formulier_DB.php';?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <style>
        html, body{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        form {
            margin-top: 5%;
            
        }
        hr {
            border: 1px solid #FD6400;
        }
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 10px 20px;
            font-size: 14px;
            line-height: 1.42857143;
            text-align: center;
            color: black;
            background-color: #fff;
            background-image: none;
            border: 1px solid #7F7FCC;
            border-radius: 0px;
            
        }
        .container {
            padding-right: 8%;
            padding-left: 8%;
            margin-right: auto;
            margin-left: auto;
            background-color: none;
        }
        
        .container_button{
            margin-top: 3%;
            text-align: center;
        }
 
        
        label,h2{
            color: #FD6400;
            font-family: open sans;
        }
        .btn-default {
            color: white;
            background-color: #FD6400;
        }
        .btn {
            display: inline-block;
            padding: 8px 40px;
            outline: 0;
            overflow: hidden;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            cursor: pointer;
            border-radius: 0px;
        }
        
        .btn-default:hover {
            background-color: #ff802b;
            color: white;
        }
        
        .img{
            height: 90%;
        }
        
        
    </style>
    <body>
        <div class="container">
          <h2>Inschrijf formulier</h2><hr>
          <form action="" method="post">
            <div class="form-group">
              <label for="name">Voornaam:</label>
              <input type="text" class="form-control" name="vnaam" placeholder="Voornaam" name="vnaam">
            </div>
            <div class="form-group">
              <label for="name">Tussenvoegsel:</label>
              <input type="text" class="form-control" name="tvoegsel" placeholder="Tussenvoegsel" name="tvoegsel">
            </div>
            <div class="form-group">
              <label for="name">Achternaam:</label>
              <input type="text" class="form-control" name="anaam" placeholder="Achternaam" name="anaam">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" placeholder="Emailadres" name="email">
            </div>
            <div class="container_button">
                <input type="submit" value="Verstuur" name="verstuur" class="btn btn-default">
            </div>
          </form>
            
        </div>
        
        
        <?php
            if (isset($_POST['verstuur'])) {

                $voornaam = $_POST['vnaam'];
                $tussenvoegsel = ($_POST['tvoegsel']);
                $achternaam = ($_POST['anaam']);
                $emailadres = ($_POST['email']);
                
                echo "<br>" . getFormulier($voornaam, $tussenvoegsel, $achternaam, $emailadres);
            };
        ?>

    </body>
</html>























