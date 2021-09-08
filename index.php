<?php
  include 'inc/header.php'
?>
<?php 
//$con = mysql_connect("localhost","root","");
//
//if (!$con)
//
//  {
//
//  die('Could not connect: ' . mysql_error());
//
//  }
//
// 
//
//mysql_select_db("contactapp", $con);
//
// 
//
//$sql="INSERT INTO contacts (name, phone, email)
//
//VALUES
//
//('$_POST[name]','$_POST[phone]', '$_POST[email]')";
//
// 
//
//if (!mysql_query($sql,$con))
//
//  {
//
//  die('Error: ' . mysql_error());
//
//  }
//
//echo "Yo! New Contact Created Succesfully.";
//
 

//mysql_close($con)
?> 
      <!-- Contact dsplay start -->
      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">e-Mail</th>
     
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
      
    </tr>
    <tr>
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
    
    </tr>
    <tr class="table-primary">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
      
    </tr>
    <tr class="table-secondary">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
     
    </tr>
    <tr class="table-success">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
      
    </tr>
    <tr class="table-danger">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
     
    </tr>
    <tr class="table-warning">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
     
    </tr>
    <tr class="table-info">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
     >
    </tr>
    <tr class="table-light">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
      
    </tr>
    <tr class="table-dark">
    <td>First Name  Last Name </td>
      <td>+23457809876543</td>
      <td>mail@mail.com</td>
     
    </tr>
  </tbody>
</table>
<!-- Contact Display Ends -->
   <?php
   include 'inc/footer.php'
   ?>

