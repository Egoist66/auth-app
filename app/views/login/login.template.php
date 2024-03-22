<h2 class="uk-text-center uk-margin-large-bottom">Login into account</h2>


<form
    method="post"
    action="?page=login&action=store"
    x-data="$store.register"
    style="align-items: center"
    class="uk-flex uk-flex-column  uk-flex-center"
>


    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: mail"></span>
            <input name="email" required placeholder="Enter your email" class="uk-input" type="email"
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
                minlength="8"
                name="password"
                maxlength="12"
                required
                placeholder="Create password"
                class="uk-input"

            >
        </div>
    </div>

    <div class="uk-margin">
        <button class="uk-button uk-button-primary" type="submit">Register</button>
    </div>

    <div class="uk-margin">
        <p>Do not have an account? Go to <a href="<?= route('page', 'register') ?>">Register</a></p>
    </div>


</form>