<?php
$target_dir = 'images/';
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']); //images/imagename.png
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //png/jpg....
$random_image_name = bin2hex(random_bytes(5));
$random_image_name = $random_image_name.'.'.$imageFileType;
$tmp_name = $_FILES['fileToUpload']['tmp_name'];
move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "images/$random_image_name");


//echo "<img src=images/$random_image_name>";
