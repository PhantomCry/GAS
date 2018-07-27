<?php 
    $eventName = $_POST['eventTitle'];
    if (is_dir('../../../assets')) {
        mkdir("../../images/events/Main/$eventName");
        echo "Success";
    } else {
        echo "Failed";
    }
    if(!empty($_FILES['eventCover'])){
        $target_dir = "../../images/events/Upcoming/";
        $target_dir = $target_dir . basename( $_FILES['eventCover']['name']);
        echo $target_dir;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
        
        if (file_exists($target_dir)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["eventCover"]["size"] > 50000000) {
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
            $dir = "../../images/events/Upcoming/";
            $newFileName = $dir . $eventName . "_" . basename($_FILES['eventCover']['name']); 
            // echo $newFileName; 
            if (move_uploaded_file($_FILES['eventCover']['tmp_name'], $newFileName)) {
              echo "The file has been uploaded";
            } else{
                echo "Failed to Upload: " . $_FILES['eventCover']['error'];
            }
        }
    }
?>