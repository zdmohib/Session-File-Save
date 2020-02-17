<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>


<?php
// Echo session variables that were set on previous page

$_SESSION["Hobby"] = $_POST["Hobby"];


$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = "Name: ". $_SESSION["name"]."\n";
fwrite($myfile, $txt);


$txt = "Email: ". $_SESSION["email"]."\n";
fwrite($myfile, $txt);


$txt = "Gender: ". $_SESSION["gender"]."\n";
fwrite($myfile, $txt);


$txt = "Degree: ". $_SESSION["degree"]."\n";
fwrite($myfile, $txt);

$txt = "Blood Group: ". $_SESSION["bloodGroup"]."\n";
fwrite($myfile, $txt);


$txt = "Hobby: ". $_SESSION["Hobby"]."\n";
fwrite($myfile, $txt);


fclose($myfile);




?>

</body>
</html>