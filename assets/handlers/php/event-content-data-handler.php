<?php 
  if(!empty($_FILES['fileToUpload']))
  {
      $eventFolder = $_POST['eventName'];
      for ($i = 0; $i < count($_FILES['fileToUpload']['name']); $i++ ) {
        $target_dir = "../../images/events/Main/$eventFolder/";
        $target_dir = $target_dir . basename( $_FILES['fileToUpload']['name'][$i]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
        
        if (file_exists($target_dir)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"][$i] > 50000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i], $target_dir)) {
              echo "The file has been uploaded";
            } else{
                echo "Failed to Upload: " . $_FILES['fileToUpload']['error'][$i];
            }
        }
      }
  }
?>