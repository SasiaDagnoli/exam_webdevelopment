<?php 
require_once __DIR__.'/dictionary.php';
?>
<div id="login-modal-container">
    <div id="login-modal" class="width-container">
        <div class="login-top">
            <img src="images/momondo_logo.png" alt="">
            <div onclick="closeLoginModal()" class="login-close">X</div>
        </div>
        <img src="images/login_modal_image.svg" alt="">
        <h3 class="pt2">Sign in or create an account</h3>
        <p class="pt05">Track prices, organise travel plans and access member-only deals with your momondo account</p>
        <button onclick="displayEmailModal()" class="mt1">Continue with email</button>
        <p class="mt1 or">Or</p>
        <a href="<?= "sign-up?language=".$language ?>"><button class="mt1">Sign up</button></a>
        <p class="login-terms mt1">By signing up you accept our terms of use and privacy policy.</p>
    </div>
</div>

<div id="email-modal-container">
    <div id="email-modal" class="width-container">
        <div class="email-top">
            <p class="back" onclick="backToLoginModal()">Back</p>
            <div onclick="closeLoginModal()" class="login-close">X</div>
        </div>
        <h2>What's your email address?</h2>
        <form class="mt1" onsubmit="displayPasswordModal(); return false">
            <input id="email-value" type="text" placeholder="Email address">
            <button>Continue</button>
        </form>
    </div>
</div>

<div id="password-modal-container">
    <div id="password-modal" class="width-container">
        <div class="password-top">
            <p class="back" onclick="backToEmailModal()">Back</p>
            <div onclick="closeLoginModal()" class="login-close">X</div>
        </div>
        <h2>Enter your password</h2>
        <p>Please enter your momondo password for TODO: EMAIL</p>
        <form class="mt1" action="bridge_login.php" method="POST">
            <input id="email-value-password-modal" type="text" name="email" style="display: none">
            <input name="password" type="password" placeholder="Password">
            <p>Forgot password?</p>
            <button>Log in</button>
        </form>
    </div>
</div>