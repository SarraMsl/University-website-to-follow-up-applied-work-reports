
<?php
@ob_start();
session_start();
?>
<?php

include("conn.php");

if (isset($_POST['submitcp'])) {
    
    $member_01 = $_POST['member_01'];
    $member_02 = $_POST['member_02'];
    $member_03 = $_POST['member_03'];
    $member_04 = $_POST['member_04'];
    
    $Status_of_task = $_POST['Status_of_task'];
    $Subject_of_task = $_POST['Subject_of_task'];
    $Task_Summary = $_POST['Task_Summary'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;
    $var= $_SESSION["user_id"];
    $sql = "INSERT INTO  collective_work(`member_01`,`member_02`,`member_03`,`member_04`,`Status_of_task`,`Subject_of_task`,`Task_Summary`,`file`,`Type`) VALUES ('$member_01','$member_02','$member_03','$member_04','$Status_of_task','$Subject_of_task','$Task_Summary','$fileName','$var')";

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
" . mysqli_error($conn);
    }
    header("location:\pages\work_grope_add.php");
    mysqli_close($conn);
}
?>
