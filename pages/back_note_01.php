
<?php
@ob_start();

session_start();
?>
<?php

include("conn.php");


if (isset($_POST['submitcp'])) {
    $Type_of_work = $_POST['Type_of_work'];
    $Subject_of_work = $_POST['Subject_of_work'];
    $evaluation_of_work = $_POST['evaluation_of_work'];
    $tto_01 = $_POST['tto_01'];
    $tto_02 = $_POST['tto_02'];
    $tto_03 = $_POST['tto_03'];
    $tto_04 = $_POST['tto_04'];
    $Note = $_POST['Note'];
    $var= $_SESSION["user_id"];
    $sql = "INSERT INTO  note_01(`Type_of_work`,`Subject_of_work`,`evaluation_of_work`,`tto_01`,`tto_02`,`tto_03`,`tto_04`,`Note`,`Type`) VALUES ('$Type_of_work','$Subject_of_work','$evaluation_of_work','$tto_01','$tto_02','$tto_03','$tto_04','$Note','$var')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    header("location:../pages/note_colective.php");

    mysqli_close($conn);
}
?>

