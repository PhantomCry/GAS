<?php 
    $eventName = $_POST['eventTitle'];
    $file = $_FILES['eventCover']['name'];
    $fileName = pathinfo($file,PATHINFO_FILENAME);
    if (preg_match('/[^a-zA-Z\d\\S]/', $eventName)) {
        $error = array("type"=>"danger","message"=>"Special Characters including whitespaces in Event Title are not allowed");
        echo json_encode($error);
    } else if (preg_match('/[^a-zA-Z\d\\S]/', $fileName)) {
        $error = array("type"=>"danger","message"=>"Special Characters including whitespaces in Cover Picture are not allowed");
        echo json_encode($error);
    } else {
        if(!empty($_FILES['eventCover'])){
            $target_dir = "../../images/events/Upcoming/";
            $target_dir = $target_dir . basename( $_FILES['eventCover']['name']);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
            if (file_exists($target_dir)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["eventCover"]["size"] > 50000000) {
                // echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            
            if ($uploadOk == 0) { // Check if $uploadOk is set to 0 by an error
                
            } else if (is_dir("../../images/events/Main/$eventName")) { // Check if folder exists
                $error = array("type"=>"danger","message"=>"Event Already Exists");
                echo json_encode($error);
            } else { // if everything is ok, try to upload Files
                mkdir("../../images/events/Main/$eventName");
                $dir = "../../images/events/Upcoming/";
                $newFileName = $dir . $eventName . "_" . basename($_FILES['eventCover']['name']); 
                if (move_uploaded_file($_FILES['eventCover']['tmp_name'], $newFileName)) {
                    $success = array("type"=>"success","message"=>"Event Successfully Added");
                    echo json_encode($success);
                } else {
                    $error = array("type"=>"success","message"=>"Something Went Wrong");
                    echo json_encode($error);
                    recursiveRemoveDirectory($dir . $eventName);
                }
            }
        }
    }

    //Taken from https://stackoverflow.com/questions/11267086/php-unlink-all-files-within-a-directory-and-then-deleting-that-directory
    // by Lusitanian and Steven Byle   
    function recursiveRemoveDirectory($directory){
    foreach(glob("{$directory}/*") as $file){
        if(is_dir($file)) { 
            recursiveRemoveDirectory($file);
        } else {
            unlink($file);
        }
    }
    rmdir($directory);
    }
?>