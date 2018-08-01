<?php 
  // echo var_dump(array_merge($_POST, $_FILES['awardee-pic']));
  // $dataArray = json_encode(array_merge($_POST, $_FILES['awardee-pic']));
  // echo $dataArray;
  $yearly_dir = $_POST['date'];
  $month = strtok($yearly_dir, '-');
  $yearly_dir = strtok( '' ); 
  if (is_dir('../../../assets')) {
    mkdir("../../images/awards/$yearly_dir");
    echo "Success";
} else {
    echo "Failed";
}
if(!empty($_FILES['awardee-pic'])){
  $target_dir = "../../images/awards/$yearly_dir/";
  $target_dir = $target_dir . basename( $_FILES['awardee-pic']['name']);
  echo $target_dir;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_dir,PATHINFO_EXTENSION));
  
  if (file_exists($target_dir)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["awardee-pic"]["size"] > 50000000) {
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
      $dir = "../../images/awards/$yearly_dir/";
      $newFileName = $dir . $month . "_" . basename($_FILES['awardee-pic']['name']); 
      // echo $newFileName; 
      if (move_uploaded_file($_FILES['awardee-pic']['tmp_name'], $newFileName)) {
        $json = file_get_contents('../../data/team-data.json');
        $tempArray = json_decode($json);
        $dataArray = $_POST;
        $dataArray['pic'] = $month . "_" . $_FILES['awardee-pic']['name'];
        array_push($tempArray, $dataArray);
        $newJsonData = json_encode($tempArray);
        file_put_contents('../../data/team-data.json', $newJsonData);
      } else{
          echo "Failed to Upload: " . $_FILES['awardee-pic']['error'];
      }
  }
}







?>