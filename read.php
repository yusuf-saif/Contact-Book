<?php
    include 'inc/header.php';
    //check existence 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $result = "SELECT name, phone, email FROM mycontacts WHERE id = ?";
            $querry = mysqli_query($conn, $result);
            $count = mysqli_num_rows($querry);
            if ($count == 1) {
                $row = mysqli_fetch_array($querry);
               // Retrieve individual feilds 
               $name = $row["name"];
               $phone = $row["phone"];
               $email = $row["email"];
            }else {
            //URL doesn't contain valid id parameter. Redirect to error page
             header("location: error.php");
             exit();
            }
        }else{
            echo "Oops! Something went wrong. Please try again later.";
        }
       
        // if (isset($_GET['id']) && !empty(trim($_GET["id"]))) {
        //         require_once 'config.php';
        //         //Select Statement
        //         $sql = "SELECT * FROM mycontacts WHERE id = ?";

        //         if ($stmt = mysqli_prepare($conn, $sql)) {

                    
        //             //Set Params
        //             $param_id = trim($_GET['id']);
        //             //Bind variables to the prepared statement
        //             mysqli_stmt_bind_param($stmt, "i", $param_id);


        //             //Attempt to execute
        //             if (mysqli_stmt_execute($stmt)) {
        //                 $result = mysqli_stmt_get_result($stmt);
        //                     if (mysqli_num_rows($results) == 1) {
        //                         //Fetch rresult 
        //                         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        //                             //Retrieve individual feilds 
        //                             $name = $row["name"];
        //                             $phone = $row["phone"];
        //                             $email = $row["email"];
        //                     }else {
        //                         //URL doesn't contain valid id parameter. Redirect to error page
        //                         header("location: error.php");
        //                         exit();
        //                     }
        //             } else{
        //                     echo "Oops! Something went wrong. Please try again later.";
        //             }
        //         }
         
        //     // Close statement
        //     mysqli_stmt_close($stmt);
            
        //     // Close connection
        //     mysqli_close($conn);
        // } else{
        //     // URL doesn't contain id parameter. Redirect to error page
        //     header("location: error.php");
        //     exit();
        // }
    ?>

<style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
      <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                        <div class="form-group">
                            <label>Name</label>
                                <p><b><?php echo $row["name"]; ?></b></p>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <p><b><?php echo $row["phone"]; ?></b></p>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <p><b><?php echo $row["email"]; ?></b></p>
                        </div>
                        <p><a href="contacts.php" class="btn btn-primary">Back</a></p>
                    </div>
                </div>        
            </div>
        </div>