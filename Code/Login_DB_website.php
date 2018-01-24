<?php
    function getPassword($u, $w) {  
        // deze functie opent een connectie, wijzigt aantal sterren van hotel
        
        $melding = "niets geupdate"; // melding staat standaard op niet gelukt
        
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";
        $dbname = "p4caseroetmeting";  // jouw databasenaam

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $melding = "geen connectie gemaakt update niet gelukt";
        } 

        $sql = "SELECT * FROM `users` where password ='" . md5($w) . "' AND username = '$u'";
                
        if($conn->query($sql)->num_rows > 0) { 
            $melding = header('location: Website_oefen.php');
        } else {
            $melding = "Login is niet goed. " . $conn->error;
        }
 
        $conn->close();
        return $melding;
    };

    function getRegister($ru, $rp) {  
        // deze functie opent een connectie, wijzigt aantal sterren van hotel
        
        $melding = "niets geupdate"; // melding staat standaard op niet gelukt
        
        $servername = "localhost"; 
        $username = "root"; 
        $password = "";
        $dbname = "p4caseroetmeting";  // jouw databasenaam
        

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $melding = "geen connectie gemaakt update niet gelukt";
        } 

        $sql = "INSERT INTO users(username, password) VALUES ('$ru','$rp')";  
        
        if ($conn->query($sql) === TRUE){
            $melding = header('location: Login_website.php');
        } else {
            $melding = "Username bestaat al. ";
        }
 
        $conn->close();
        return $melding;
    };
?>