<?php
            //Connection 
            $host = "localhost";
                $username = "root";
                $password = "";
                $db_name = "contact_book";
                
                //Attempt Connection.
            $conn = mysqli_connect($host, $username, $password, $db_name);
                
                //Check Connection
                if ($conn === false) {
                    die("ERROR: Oops seems we can't connect at the moment. " . mysqli_connect_error());
                }
?>
