

<div class="container uk-container-large  uk-margin-auto">
    <nav class="uk-flex-between" uk-navbar>

        <ul class="uk-navbar-nav">
            <li><a href="/">Home</a></li>

        </ul>

        <ul class="uk-navbar-nav">
            <?php if (sessionHas('auth')): ?>

            <?php else: ?>
                    <li><a href="<?= route('page', 'register') ?>">Sign up</a></li>
            <?php endif; ?>
            <?php if (sessionHas('auth')): ?>
                    <li><a href=<?= route('page', 'profile') ?>>Profile</a></li>
            <?php else: ?>
                    <li><a href=<?= route('page', 'login') ?>>Login</a></li>
            <?php endif; ?>
        </ul>

    </nav>
</div>

