<?php 
$_title = 'Profile | momondo';
require_once __DIR__.'/comp_header.php';

if(!$_SESSION) {
    header('Location: /');
    exit();
}
?>

<main>
    <div class="profile">
        <?php
        if(!empty($_SESSION['user_profile_picture'])) {  
            ?>
            <img src="images/<?= $_SESSION['user_profile_picture'] ?>">
        <?php
        } else { 
        echo "<img src='images/img_avatar.png'>";
        }
        ?>
          <p onclick="changeImage()"  class="change-image">Change image</p>
          <p><?= "Welcome, {$_SESSION['user_name']}" ?></p> 
    </div>
</main>

<?php 
require_once __DIR__.'/comp_footer.php';
?>