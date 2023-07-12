<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "" , "disastter_db");
    if (isset($_POST['submit'])){
    }
    $choice = $_POST['flexRadioDefault'];
        $File = $_FILES["disaster_img"]["name"];
        $crr_lat = $_POST['latitude'];
        $crr_lng = $_POST['longitude'];

    $query="INSERT INTO disaster_details (Type,Loc_Latitude,Loc_longitude,Image) values('$choice','$crr_lat','$crr_lng','$File')";

    $execute = mysqli_query($con,$query);

    echo($con->error);
    if($execute){
        $msg="Disaster reported";
        header("Location:index.php?msg=".$msg);
    }
    else{
        $msg="Disaster not reported";
        header("Location:index.php?msg=".$msg);
    }
?>