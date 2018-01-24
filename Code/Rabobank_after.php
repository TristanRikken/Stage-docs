<!DOCTYPE html>
<html>
    <head>
        <title>Rabobank Formulier</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
        hr {
            border: 1px solid #FD6400;
        }
        .container {
            padding-right: 8%;
            padding-left: 8%;
            margin-right: auto;
            margin-left: auto;
            background-color: white;
        }
        
        label,h2{
            color: #FD6400;
            font-family: open sans;
        }
        
        #bericht {
            text-align: center;
            font-family: open sans;
            font-size: 18px;
        }
        
        .knop {
            display: inline-block;
            padding: 8px 40px;
            outline: 0;
            overflow: hidden;
            border: none;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            text-align: center;
            cursor: pointer;
            border-radius: 0px;
            color: white;
            background-color: #FD6400;
        }
        .terug_knop{
            margin-top: 3%;
            text-align: center;
        }
        
        
        
    </style>
    <body>
        <div class="container">
          <h2>Inschrijf formulier</h2><hr>
        </div>
        <div id="bericht">
            <br>Bedankt voor het invullen. Je bent nu ingeschreven. <br><br> Met vriendelijke groet, <br> Het Rabobank Team. 
        </div>
        <div class="terug_knop">
            <button class="knop" onclick="window.location.href='Rabobank_formulier.php'">Terug</button>
        </div>
    
        
    </body>
</html>























