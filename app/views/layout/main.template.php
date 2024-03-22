
<?= view('layout->header.template') ?>

<section class="uk-padding-large uk-height-viewport uk-padding-remove-left uk-padding-remove-right">
    <main class="uk-height-viewport">
        <div class="container uk-container-large uk-margin-auto">

            <?= $content ?>
        </div>
    </main>
</section>

<?= view('layout->footer.template') ?>
