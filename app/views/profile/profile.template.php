

<div class="uk-margin">
    <a href="<?= route('page', 'profile&action=logout') ?>" class="uk-button uk-button-default uk-align-right">Logout</a>
</div>

<div class="uk-container uk-margin-auto">
    <div class="uk-card uk-card-default uk-padding-large">
        <h2 class="uk-card-title">Welcome to your profile</h2>
        <p>Here you can see your data and update it.</p>
        <hr>
        <p><strong>Username: </strong><span id="username"><?= $user['nickname']?></span></p>
        <p><strong>Email: </strong><span id="email"><?= $user['email']?></span></p>
        <p><strong>ID: </strong><span id="email"><?= $user['id']?></span></p>
        <hr>
        <form id="update-form" action="?page=profile&action=update" method="post">
            <div class="uk-margin">
                <label for="password" class="uk-form-label">New password</label>
                <div class="uk-form-controls">
                    <input type="password" id="password" name="password"
                           class="uk-input uk-form-width-large">
                </div>
            </div>
            <div class="uk-margin">
                <label for="password_confirm" class="uk-form-label">Confirm new password</label>
                <div class="uk-form-controls">
                    <input type="password" id="password_confirm" name="password_confirm"
                           class="uk-input uk-form-width-large">
                </div>
            </div>
            <div class="uk-margin">
                <button class="uk-button uk-button-default">Update profile</button>
            </div>
        </form>
    </div>
</div>
