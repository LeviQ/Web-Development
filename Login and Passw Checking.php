<?php
	                         
        $username = $_POST["Username"];
        $password = $_POST["Password"];
        
        if($username == "Aleksander" and $password == "Lewicki")
        {
           session_start();
           $_SESSION['username'] = $username;
           $_SESSION['password'] = $password;   
	   header("location: glowna.php");
        }
        else 
        {
           header("location: index.php");
        } 
            
?>   
		