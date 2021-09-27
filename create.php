<?php
        include 'inc/header.php';
        require_once 'config.php';

    if(isset($_POST['submit'])) {
         $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
         $phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
         $email    = stripslashes($_REQUEST['email']);
         $email = mysqli_real_escape_string($conn, $email);

        if (!empty($name) && !empty($phone) && !empty($email)) {
            // $check = "SELECT COUNT(*) FROM mycontacts WHERE name = '".$name. "' && phone = '".$phone."' && email = '".$email."' "; 
            // $sql = mysqli_query($conn, $check);
            // $row = mysqli_fetch_assoc($sql);
            $sql = "INSERT INTO mycontacts (name, phone, email) VALUES ('$name', '$phone', '$email')";
            if(mysqli_query($conn, $sql)){
            echo "Records added successfully.";
            header("location: contacts.php");
           // exit();
            }else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
            mysqli_close($conn);
            //  Close connection
        } else {
           echo "<h3> Empty Feilds Not Allowed </h3>";
        }
                   

        // Attempt insert query execution
       
    }   
?>
    <style>
            .wrapper{
                width: 600px;
                margin: 0 auto;
            }
    </style>
s
    <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mt-5">Create Record</h2>
                        <p>Please fill this form and submit to add a contact record to the database.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter a name">
                                <!-- <span class="invalid-feedback"><?php//echo $name_err; ?></span> -->
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" name="phone" class="form-control" <?php //echo (!empty($phone_err)) ? 'is-valid' : ''; ?> placeholder="Enter a Phone">
                                <!-- <span class="invalid-feedback"><?php //echo $phone_err; ?></span> -->
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" <?php //echo (!empty($email_err)) ? 'is-valid' : ''; ?> placeholder="Enter an Email">
                                <!-- <span class="invalid-feedback"><?php// echo $email_err; ?></span> -->
                            </div>
                            <input type="submit" value="submit" class="btn btn-primary" name="submit">
                            <a href="contacts.php" class="btn btn-secondary ml-2">Cancel</a>               
                        </form>
                </div>
            </div>        
        </div>
    </div>
    <?php
        include 'inc/footer.php';
    ?>