
<?php
@ob_start();
session_start();
?>
<?php
include("conn.php");


if(isset($_POST['submitcJ']))
{	 
    $Type_of_work = $_POST['Type_of_work'];
    $Subject_of_work = $_POST['Subject_of_work'];
    $evaluation_of_work = $_POST['evaluation_of_work'];
    $tto = $_POST['tto'];
    $Note = $_POST['Note'];
    $var= $_SESSION["user_id"];
    $sql = "INSERT INTO  note(`Type_of_work`,`Subject_of_work`,`evaluation_of_work`,`tto`,`Note`,`Type`) VALUES ('$Type_of_work','$Subject_of_work','$evaluation_of_work','$tto','$Note','$var')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
header("location:../pages/note_indivudial.php");
mysqli_close($conn);
}
?>
