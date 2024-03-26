
<h2 class="uk-text-center uk-margin-large-bottom">Create Account</h2>


<form
    method="post"
    action="?page=register&action=store"
    x-data="$store.auth"
    style="align-items: center"
    class="uk-flex uk-flex-column  uk-flex-center"
>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon:user"></span>
            <input autofocus x-model="name" name="name" required placeholder="Enter your name*" class="uk-input" type="text"
                   aria-label="Not clickable icon">
        </div>
    </div>
    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: mail"></span>
            <input autocomplete x-model="email" name="email" required placeholder="Enter your email*" class="uk-input" type="email"
                   aria-label="Not clickable icon">
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span style="pointer-events: auto; cursor: pointer"
                  @click="togglePassword()"
                  x-bind:uk-icon="on ? 'icon:lock' : 'icon:unlock'"
                  class="uk-form-icon uk-form-icon-flip">

            </span>
            <input
                x-bind:type="on ? 'password' : 'text'"
                x-model="password"
                minlength="4"
                name="password"
                maxlength="12"
                required
                placeholder="Create password*"
                class="uk-input"

            >
        </div>
    </div>

    <div class="uk-margin">
        <button title="Заполните все поля" x-bind:disabled="!validateRegisterFields()" class="uk-button uk-button-primary" type="submit">Register</button>
    </div>

    <?php if(sessionHas('register_error')): ?>

        <div class="uk-alert-danger" uk-alert>
            <a style="right: 6px !important; top: 21px !important" class="uk-alert-close uk-display-inline-block" uk-close></a>
            <p><?= session('reg_error_message') ?></p>
        </div>

    <?php endif; ?>

    <div class="uk-margin">
        <p>Already have an account? Go to <a href="<?= route('page', 'login') ?>">Login</a></p>
    </div>


</form>


