
<?php
$db = mysqli_connect('localhost', 'root', '', 'mart');
 
 $errors = array(); 
 

 
 // REGISTER USER
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 

    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
      
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $fist = mysqli_real_escape_string($db, $_POST['first']);
            $last = mysqli_real_escape_string($db, $_POST['last']);
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $contact = mysqli_real_escape_string($db, $_POST['contact']);
            $loca = mysqli_real_escape_string($db, $_POST['location']);
            $pass = mysqli_real_escape_string($db, $_POST['password']);
    

            $insert ="INSERT into upro (image, created,FIRST,LAST,pass,email,num,address) VALUES ('$imgContent',NOW(),'$fist','$last','$pass','$email','$contact','$loca')"; 
           
  mysqli_query($db, $insert);
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
header('location:..\Main\index.php');
?>