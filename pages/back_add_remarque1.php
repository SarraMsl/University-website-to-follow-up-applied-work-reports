
<?php
@ob_start();
session_start();
?>
<?php

include("conn.php");


if(isset($_POST['submitco']))
{	 
    $Type_of_work = $_POST['Type_of_work'];
    $subject_of_work = $_POST['subject_of_work'];
    $To = $_POST['To'];
    $Remarque = $_POST['Remarque'];
    $var= $_SESSION["user_id"];
     $sql = "INSERT INTO  remarque(`Type_of_work`,`subject_of_work`,`To`,`Remarque`,`Type`) VALUES ('$Type_of_work','$subject_of_work','$To','$Remarque','$var')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
     header("location:\pages\Remarque.php");
	 mysqli_close($conn);
}
?>
