<?php
$_title = 'Upload image | momondo';
require_once __DIR__.'/comp_header.php';
?>

<main>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>
</main>

<?php
require_once __DIR__.'/comp_footer.php'
?>