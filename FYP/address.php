<?php
include("dataconnection.php");\


if(isset($_POST['btn'])){
    $FULLNAME=$_POST['fname'];
    $ADDRESS=$_POST['street-address'];
    $CITY=$_POST['city'];
    $STATE=$_POST['state'];
    $POSTCODE=$_POST['postal-code'];

    $ADDRESS = "INSERT INTO address(fullname,saddress,CITY,sstate,POSTCODE) VALUES ('$FULLNAME',' $ADDRESS','$CITY','$STATE','$POSTCODE')";
    $ADDRESS_run = mysqli_query($connect,$ADDRESS);
    if($ADDRESS_run)
    {
        header("location: 1.php");
    }
}
?>