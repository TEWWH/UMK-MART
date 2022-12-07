
<?php 
<?php include('REGISTER.php')
// Include the database configuration file  
$db = mysqli_connect('localhost', 'root', '', 'mart');
 
// Get image data from database 
$result = mysqli_query($db, "SELECT * FROM upro WHERE pass = ' $password'");
 
    while ($row = mysqli_fetch_assoc($result))
    {

        echo "
        <img width='150px' src='$row[image]'>";
    }
      ?>


