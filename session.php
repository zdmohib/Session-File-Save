<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>



</body>
</html>


<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>





<form method="post" action="file.php">
		
  Hobby :
				<input type="text" name="Hobby"/>
				
				<br><br>
								
	  <?php
// Set session variables
      



$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["degree"] = $_POST["degree"];
$_SESSION["bloodGroup"] = $_POST["bloodGroup"];



echo "Session variables are set.";
?>
			
		
		
		<input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>