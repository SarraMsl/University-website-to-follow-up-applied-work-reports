
<?php
@ob_start();
session_start();
?>
<?php

include("conn.php");

if(isset($_POST['submits']))
{	 
    $Full_Name = $_POST['Full_Name'];
    $Subject_of_task = $_POST['Subject_of_task'];
    $Status_of_task = $_POST['Status_of_task'];
    $Task_Summary = $_POST['Task_Summary'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;
    
    $var= $_SESSION["user_id"];
     $sql = "INSERT INTO  work_individual(`Full_Name`,`Subject_of_task`,`Status_of_task`,`Task_Summary`,`file`,`Type`) VALUES ('$Full_Name','$Subject_of_task','$Status_of_task','$Task_Summary','$fileName','$var')";

     $run = mysqli_query($conn,$sql);
        
     if($run){
         move_uploaded_file($fileTmpName,$path);
         echo "success";
     }
     else{
         echo "error".mysqli_error($conn);
     }
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
     header("location:\pages\work_individual_add.php");
	 mysqli_close($conn);
}
?>
