<?php
include("dataconnect.php");
if(isset($_POST['btn1'])){
    $CARDCODE=$_POST['card'];
    $CARDOWNER=$_POST['fname'];
    

    $CARD_DETAILS = "INSERT INTO card_details (cardnumber,cardowner) VALUES ('$CARDCODE','$CARDOWNER')";
    $CARD_DETAILS_run = mysqli_query($connect,$CARD_DETAILS);
    if($CARD_DETAILS_run)
    {
        header("location:2.php");
    }
}
?>