<?php
  include 'inc/header.php'
?>
<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = ""; 
       $db_name = "contactapp"; 
       $conn = mysqli_connect ($servername ,$username , $password, $db_name);

	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $email = $_POST['email'];

	 $sql = "INSERT INTO `tbl_contacts` ( `fldname`, `fldphonenumber`, `fldemail`) VALUES ('$name', '$phone', '$email')";

	 $rs = mysqli_query($conn, $sql);

	 if($rs)
{
	echo "Yo!  You have successfully Added a contact Dude..";
}else{
  echo "Seems it didn't work boss";
}

?>
<!-- Contact Display Ends -->
   <?php
   include 'inc/footer.php'
   ?>






