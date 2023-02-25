
<?php
@ob_start();
session_start();
?>
<?php

include("conn.php");


if(isset($_POST['submitcp']))
{	 
    $Full_Name = $_POST['Full_Name'];
    $Type_of_work = $_POST['Type_of_work'];
    $Subject_of_work = $_POST['Subject_of_work'];
    $Name_of_link = $_POST['Name_of_link'];
    $Link = $_POST['Link'];
    $Description = $_POST['Description'];
    $var= $_SESSION["user_id"];
     $sql = "INSERT INTO  link(`Full_Name`,`Type_of_work`,`Subject_of_work`,`Name_of_link`,`Link`,`Description`,`Type`) VALUES ('$Full_Name','$Type_of_work','$Subject_of_work','$Name_of_link','$Link','$Description','$var')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
     header("location:\pages\link_add.php");
	 mysqli_close($conn);
}
?>

