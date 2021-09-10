            <!-- Header Globally Called -->
<?php 
      include 'inc/header.php'
?>

            <!-- Add Contacts Feilds Starts -->
      <form class="row" action="index.php" method="post">
            <div class="col-md-6">
              <label for="name" class="form-label">Full-Namer</label>
                <input  class="form-control" id="phone" name="name" placeholder="Enter a name ...">
            </div> 
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
                <input  class="form-control" id="phone" name="phone" placeholder="Enter a phone number ...">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input  type="email" class="form-control" id="inputEmail" name="email" placeholder="Also don't forget the mail...">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input  type="email" class="form-control" id="inputEmail4">
            </div>
                  <!-- Submit Button -->
            <div class="col-md-6 align-items-center">  <button type="submit" class="btn btn-outline-success">Create Contact</button>  </div>
 
      </form>
            <!-- Add Contacts Feilds Ends... -->



            <!-- Footer Globally Called -->
<?php 
      include 'inc/footer.php'
?>

