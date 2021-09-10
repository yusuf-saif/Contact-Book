<?php  

		$host = "localhost";
		$username = "root";
		$password = "";
		$db_name = "contactappdb";

          $conn = mysqli_connect($host, $username, $password, $db_name);

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Escape user inputs for security
        $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
        $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);

        // Attempt insert query execution
        $sql = "INSERT INTO mycontacts (name, phone, email)
		 VALUES ('$name', '$phone', '$email')";
        if(mysqli_query($conn , $sql)){
            echo "Yoo! your Contact have been added Succesfully 🙂🙂.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);

?>