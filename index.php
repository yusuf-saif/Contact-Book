  <!-- Header Begins -->
<?php
  include 'inc/header.php'
?>
    <!-- Header Ends -->




    <!-- Database Connection -->
<?php 
    include 'conn.php'
    ?>
    <!-- Database Ends -->


    <!-- Table for Contacts Starts -->
    <table class="table table-striped table-bordered  table-hover">
        <thead>
            <tr>
                <th scope="col">S/No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">email</th>
            </tr>
          </thead>
        <tbody>
          <?php while (($row = mysqli_fetch_array($results)) {?>
         
            <tr>
                <th scope="row">1</th>
                <td>Mark Essien</td>
                <td>123456789</td>
                <td>markesien@mdo.com</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Mark Essien</td>
                <td>123456789</td>
                <td>markesien@mdo.com</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mark Essien</td>
                <td>123456789</td>
                <td>markesien@mdo.com</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Mark Essien</td>
                <td>123456789</td>
                <td>markesien@mdo.com</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Mark Essien</td>
                <td>123456789</td>
                <td>markesien@mdo.com</td>
              </tr>
  </tbody>
</table>

      <!-- Table for Contacts Ends -->


    <!-- Footer Starts -->
   <?php
   include 'inc/footer.php'
   ?>
    <!-- Footer Ends -->





