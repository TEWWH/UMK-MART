<?php  
// Database configuration  
$db = mysqli_connect('localhost', 'root', '', 'mart');
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}