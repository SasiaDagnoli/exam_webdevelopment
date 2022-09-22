<?php 
$_title = 'Sign up | momondo';
require_once __DIR__.'/comp_header.php';
require_once __DIR__.'/comp_login_modal.php';
require_once __DIR__.'/_x.php';
?>

<main>
    <form id="signup-form" onsubmit="validate(signup); return false">
        <div class="name">
            <div class="input-fields">
                <label for="firstname">Firstname</label>
                <input
                id="firstname"
                type="text" 
                data-validate="str"
                data-min="<?= _FIRST_NAME_MIN_LEN ?>"
                data-max="<?= _FIRST_NAME_MAX_LEN ?>"
                placeholder="Firstname"
                name="firstname"
                maxlength="<?= _FIRST_NAME_MAX_LEN ?>">
            </div>
            <div class="input-fields">
                <label for="lastname">Lastname</label>
                <input 
                data-validate="str"
                data-min="<?= _LAST_NAME_MIN_LEN ?>"
                data-max="<?= _LAST_NAME_MAX_LEN ?>"
                id="lastname"
                type="text"
                placeholder="Lastname"
                name="lastname"
                maxlength="<?= _LAST_NAME_MAX_LEN ?>">
            </div>
        </div>
        <div class="input-fields">
            <label for="email">E-mail</label>
            <input
            onblur="isEmailAvailable()"
            onfocus="clearInput()" 
            data-validate="email"
            id="email"
            type="text"
            placeholder="E-mail"
            name="email">
            <p class="already-in-use" style="display: none;">E-mail is already in use</p>
        </div>
        <div class="input-fields">
            <label for="password">Password</label>
            <input
            data-validate="str"
            data-min="<?= _PASSWORD_MIN_LEN ?>"
            data-max="<?= _PASSWORD_MAX_LEN ?>" 
            id="password"
            type="password"
            placeholder="Password"
            name="password" 
            maxlength="<?= _PASSWORD_MAX_LEN ?>">
        </div>
        <div class="input-fields">
            <input 
            data-validate="str"
            data-min="<?= _PASSWORD_MIN_LEN ?>"
            data-max="<?= _PASSWORD_MAX_LEN ?>" 
            type="password"
            placeholder="Password"
            name="repeat-password"
            maxlength="<?= _PASSWORD_MAX_LEN ?>">
        </div>
        <button>Signup</button>
    </form>
</main>

<?php 
require_once __DIR__.'/comp_footer.php'
?>