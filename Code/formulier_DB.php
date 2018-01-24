<?php
    function getFormulier($fv, $ft, $fa, $fe){
        
        $melding = "niets geupdate"; 

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Rabo_formulier";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            $melding = "geen connectie gemaakt";
        }

        $sql = "INSERT INTO formulier(voornaam, tussenvoegsel, achternaam, emailadres) VALUES ('$fv','$ft','$fa','$fe')"; 


        if ($conn->query($sql) === TRUE){
            header('location: Output.php');
            $melding = "ok!";
        } else {
            $melding = "Je bent al een keer ingeschreven";
        }
 
        $conn->close();
        return $melding;
    }
    
?> 