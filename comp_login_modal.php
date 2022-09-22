<?php 
require_once __DIR__.'/_x.php';
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

<div id="login-form-container">
    <div id="login-form-modal" class="width-container">
        <div class="login-form-top">
            <p class="back" onclick="backToLoginModal()">Back</p>
            <div onclick="closeLoginModal()" class="login-close">X</div>
        </div>
        <h2>Sign in</h2>
        <form id="login" class="mt1" onsubmit="validateLogin(login); return false">
            <div class="email-login">
                <input
                name="email"
                data-validate-login="email"
                id="email-value" 
                type="text" 
                placeholder="Email address">
                <p class="not-correct-email" style="display: none;">Please enter a valid E-mail</p>
            </div>
            <div class="password-login mt1">
                <input
                data-validate-login="str"
                data-min="<?= _PASSWORD_MIN_LEN ?>"
                data-max="<?= _PASSWORD_MAX_LEN ?>"
                maxlength="<?= _PASSWORD_MAX_LEN ?>"  
                name="password" 
                type="password" 
                placeholder="Password">
                <p class="not-correct-password" style="display: none;">Incorrect password</p>
            </div>
            <button class="mt1">Continue</button>
        </form>
    </div>
</div>