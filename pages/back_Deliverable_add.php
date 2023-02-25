
<?php
@ob_start();
session_start();
?>
<?php

include("conn.php");


if (isset($_POST['submitcp'])) {
    
    $Full_Name = $_POST['Full_Name'];
    $Date = $_POST['Date'];
    $Venue = $_POST['Venue'];
    $Attendees_01 = $_POST['Attendees_01'];
    $Attendees_02 = $_POST['Attendees_02'];
    $Attendees_03 = $_POST['Attendees_03'];
    $Attendees_04 = $_POST['Attendees_04'];

    $Absendess_01 = $_POST['Absendess_01'];
    $Absendess_02 = $_POST['Absendess_02'];
    $Absendess_03 = $_POST['Absendess_03'];
    $Absendess_04 = $_POST['Absendess_04'];

    $Subject_of_meeting = $_POST['Subject_of_meeting'];
    $Metting_Summary = $_POST['Metting_Summary'];
    $Actions = $_POST['Actions'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;
    
    $var= $_SESSION["user_id"];
    $sql = "INSERT INTO  deliverable(`Full_Name`,`Date`,`Venue`,`Attendees_01`,`Attendees_02`,`Attendees_03`,`Attendees_04`,`Absendess_01`,`Absendess_02`,`Absendess_03`,`Absendess_04`,`Subject_of_meeting`,`Metting_Summary`,`Actions`,`file_of_meeting`,`Type`) VALUES ('$Full_Name','$Date','$Venue','$Attendees_01','$Attendees_02','$Attendees_03','$Attendees_04','$Absendess_01','$Absendess_02','$Absendess_03','$Absendess_04','$Subject_of_meeting','$Metting_Summary','$Actions','$fileName','$var')";

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

    header("location:\pages\Deliverable_add.php");
    mysqli_close($conn);
}
?>
