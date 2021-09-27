<?php
    require_once 'config.php';
    include 'inc/header.php';
?>
<?php

    $name = $phone = $email = "";
    $name_err = $phone_err = $email_err = "";

    //Processing the form
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        //get values
        $id = $_POST['id'];
        
        //validate name
        $input_name = trim($_POST['name']);
        if (empty($input_name)) {
            $name_err = "Please enter a name";
        }elseif (!filter_var($input_name, FILTER_VALIDATE_REGEXP,array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
            $name_err = "please enter a valid name.";
        }else {
            $name = $input_name;
        }

        //validate phone
        $input_phone = trim($_POST["phone"]);
        if (empty($input_phone)) {
            $phone_err = "Please enter a valid phone";
        }else {
            $phone = $input_phone;
        }

        // Validate Email
        $input_email = trim($_POST["email"]);
        if(empty($input_email)){
            $email_err = "Please enter a valid email.";     
        } else{
            $email = $input_email;
        }

        //check input 
        if (empty($name_err) && empty($phone_err) && empty($email_err)) {
            //Update statement       
            $sql = "UPDATE `mycontacts` SET name=?,phone=?, email=? WHERE id = ?";
        }if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_phone, $param_email, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_phone = $phone;
            $param_email = $email;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: contacts.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
     
        // Close statement
        //mysqli_stmt_close($stmt);


        // Close connection
        mysqli_close($conn);
    } else{
        // Check existence of id parameter before processing further
        if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
            // Get URL parameter
            $id =  trim($_GET["id"]);
        
            // Prepare a select statement
            $sql = "SELECT * FROM mycontacts WHERE id = ?";
            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "i", $param_id);
            
                // Set parameters
                $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $phone = $row["phone"];
                    $email = $row["email"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
    }
?>

<style>
    wrapper{
    width:600px;
    margin: 0 auto;
    }
</style>

<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mt-5">Update Record</h2>
                <p>edit records</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input name="phone" class="form-control <?php echo (!empty($phone_err)) ? 'is-invalid' : ''; ?>"><?php echo $phone; ?></textarea>
                            <span class="invalid-feedback"><?php echo $phone_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>email</label>
                            <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <span class="invalid-feedback"><?php echo $email_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="contacts.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'inc/footer.php';
?>  