<?php
$target_dir = 'images/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); //images/imagename.png
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //png/jpg....
$random_image_name = bin2hex(random_bytes(5));
$random_image_name = $random_image_name.'.'.$imageFileType;
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "$target_dir/$random_image_name")) {
    session_start();
    $_SESSION['user_profile_picture'] = $random_image_name;
    header('Location: profile');
    exit();
}



