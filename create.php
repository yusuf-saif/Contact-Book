<?php 
      include 'inc/header.php'
?>

<form class="row" action="index.php" method="post">
  <div class="col-md-6">
    <label for="fullname" class="form-label">FullName</label>
    <input  type="text" class="form-control" id="fullname">
  </div> 
  <div class="col-md-6">
    <label for="phone" class="form-label">Phone Number</label>
    <input  class="form-control" id="phone">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input  type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input  type="email" class="form-control" id="inputEmail4">
  </div>

  <div class="col-md-6 align-items-center">  <button type="submit" class="btn btn-outline-success">Create Contact</button>  </div>
 
</form>




<?php 
      include 'inc/footer.php'
?>

