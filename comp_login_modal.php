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

<div id="email-modal-container">
    <div id="email-modal" class="width-container">
        <div class="email-top">
            <p class="back" onclick="backToLoginModal()">Back</p>
            <div onclick="closeLoginModal()" class="login-close">X</div>
        </div>
        <h2>What's your email address?</h2>
        <form id="email-login" class="mt1" onsubmit="validateLoginEmail(login); return false">
            <input
            name="email"
            onfocus="clearInput()" 
            data-validate-login="email"
            id="email-value" 
            type="text" 
            placeholder="Email address">
            <p class="not-correct" style="display: none;">Please enter a valid E-mail</p>
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
        <p class="enter-password-for-email"></p>
        <form id="password-login" class="mt1" method="POST" onsubmit="validateLoginPassword(password); return false">
            <input id="email-value-password-modal" type="text" name="email" style="display: none">
            <input 
            onfocus="clearInput()"
            data-validate-login="str" 
            data-min="<?= _PASSWORD_MIN_LEN ?>"
            data-max="<?= _PASSWORD_MAX_LEN ?>"
            maxlength="<?= _PASSWORD_MAX_LEN ?>"
            name="password" 
            type="password" 
            placeholder="Password">
            <p class="not-correct" style="display: none;">Wrong password</p>
            <p>Forgot password?</p>
            <button>Log in</button>
        </form>
    </div>
</div>